Attribute VB_Name = "Module1"
Private Sub GetCalData(StartDate As Date, Optional EndDate As Date, Optional StaffName As String)
 
' -------------------------------------------------
' Notes:
' If Outlook is not open, it still works, but much slower (~8 secs vs. 2 secs w/ Outlook open).
' Make sure to reference the Outlook object library before running the code
' End Date is optional, if you want to pull from only one day, use: Call GetCalData("7/14/2008")
' -------------------------------------------------
 
Dim olApp As Outlook.Application
Dim olNS As Outlook.Namespace
Dim myCalItems As Outlook.Items
Dim ItemstoCheck As Outlook.Items
Dim ThisAppt As Outlook.AppointmentItem
Dim MyName As Outlook.Recipient
 
Dim MyItem As Object
 
Dim StringToCheck As String
 
Dim myBook As Excel.Workbook
Dim rngStart As Excel.Range
 
Dim i As Long
Dim NextRow As Long
 
' if no end date was specified, then the requestor only wants one day, so set EndDate = StartDate
' this will let us return appts from multiple dates, if the requestor does in fact set an appropriate end date
If EndDate = "12:00:00 AM" Then
  EndDate = StartDate
End If
 
If EndDate < StartDate Then
  MsgBox "Those dates seem switched, please check them and try again.", vbInformation
  GoTo ExitProc
End If
 
If EndDate - StartDate > 28 Then
  ' ask if the requestor wants so much info
  If MsgBox("This could take some time. Continue anyway?", vbInformation + vbYesNo) = vbNo Then
      GoTo ExitProc
  End If
End If
 
' get or create Outlook object and make sure it exists before continuing
On Error Resume Next
  Set olApp = GetObject(, "Outlook.Application")
  If Err.Number <> 0 Then
    Set olApp = CreateObject("Outlook.Application")
  End If
On Error GoTo 0
If olApp Is Nothing Then
  MsgBox "Cannot start Outlook.", vbExclamation
  GoTo ExitProc
End If
 
Set olNS = olApp.GetNamespace("MAPI")
Set MyName = olNS.CreateRecipient(StaffName)
Set myCalItems = olNS.GetSharedDefaultFolder(MyName, olFolderCalendar).Items

 
' ------------------------------------------------------------------
' the following code adapted from:
' http://www.outlookcode.com/article.aspx?id=30
'
With myCalItems
  .Sort "[Start]", False
  .IncludeRecurrences = True
End With
'
StringToCheck = "[Start] >= " & Quote(StartDate & " 12:00 AM") & " AND [End] <= " & _
  Quote(EndDate & " 11:59 PM")
Debug.Print StringToCheck
'
Set ItemstoCheck = myCalItems.Restrict(StringToCheck)
Debug.Print ItemstoCheck.Count
' ------------------------------------------------------------------
 
If ItemstoCheck.Count > 0 Then
  ' we found at least one appt
  ' check if there are actually any items in the collection, otherwise exit
  If ItemstoCheck.Item(1) Is Nothing Then GoTo ExitProc
  
  Set myBook = Excel.Workbooks.Add
  Set rngStart = myBook.Sheets(1).Range("A1")
 
  With rngStart
    .Offset(0, 0).Value = "Subject"
    .Offset(0, 1).Value = "Date"
  End With
 
  For Each MyItem In ItemstoCheck
    If MyItem.Class = olAppointment Then
    ' MyItem is the appointment or meeting item we want,
    ' set obj reference to it
      Set ThisAppt = MyItem
      NextRow = WorksheetFunction.CountA(Range("A:A"))
 
      With rngStart
        .End(xlDown).End(xlUp).Offset(NextRow, 0).Value = ThisAppt.Subject
        .End(xlDown).End(xlUp).Offset(NextRow, 1).Value = Format(ThisAppt.Start, "DDMMMYY")
      End With
    End If
  Next MyItem
 
   'Make it pretty
    Call Cool_Colors(rngStart)
 
Else
    MsgBox "There are no appointments or meetings during" & _
      "the time you specified. Exiting now.", vbCritical
End If

Call StudySeeker(myBook)

Call CheckQA(StartDate, EndDate)

Call indicator
 
ExitProc:
Set myCalItems = Nothing
Set ItemstoCheck = Nothing
Set olNS = Nothing
Set olApp = Nothing
Set rngStart = Nothing
Set ThisAppt = Nothing

End Sub

Private Function Quote(MyText)
' from Sue Mosher's excellent book "Microsoft Outlook Programming"
  Quote = Chr(34) & MyText & Chr(34)
End Function

Private Sub Cool_Colors(rng As Excel.Range)
'
' Lt Blue BG with white letters
'
'
With Range(rng, rng.End(xlToRight))
  .Font.ColorIndex = 2
  .Font.Bold = True
  .HorizontalAlignment = xlCenter
  .MergeCells = False
  .AutoFilter
  .CurrentRegion.Columns.AutoFit
  With .Interior
    .ColorIndex = 41
    .Pattern = xlSolid
  End With
End With
 
End Sub


Sub Button1_Click()

Dim FromDate As Date
Dim ToDate As Date
Dim StaffName As String

FromDate = Sheets("Inspection Check").Range("StartDate").Value
ToDate = Sheets("Inspection Check").Range("EndDate").Value
StaffName = Sheets("Inspection Check").Range("StaffName").Value

Call Clear_Click

Application.ScreenUpdating = False
  Call GetCalData(FromDate, ToDate, StaffName)
Application.ScreenUpdating = True
End Sub


Private Sub StudySeeker(Optional myBook As Workbook)

Application.ScreenUpdating = False

Dim Bcell As Range
Dim row As Integer
Dim phase As String
Dim StudyNum As String
Dim StudyLoc As Integer

row = 5

Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("B6:D106").ClearContents

For Each Bcell In Range("A1:A200")
  If IsEmpty(Bcell) = False Then
    phase = Left(Bcell, 4)
    If phase = "Seed" Or phase = "Inoc" Or phase = "Read" Or phase = "*Rea" Or phase = "*See" Or phase = "*Ino" Then
      StudyLoc = InStr(Bcell, "AD")
      If StudyLoc > 1 Then
        StudyNum = Mid(Bcell, StudyLoc, 13)
        row = row + 1
        Workbooks("CheckQA.xlsm").Sheets("Inspection Check").Range("B" & row) = StudyNum
        If phase = "Seed" Or phase = "*See" Then
          Workbooks("CheckQA.xlsm").Sheets("Inspection Check").Range("C" & row) = "Seed"
        ElseIf phase = "Inoc" Or phase = "*Ino" Then
          Workbooks("CheckQA.xlsm").Sheets("Inspection Check").Range("C" & row) = "Inoc"
        ElseIf phase = "Read" Or phase = "*Rea" Then
          Workbooks("CheckQA.xlsm").Sheets("Inspection Check").Range("C" & row) = "Read"
        End If
        Workbooks("CheckQA.xlsm").Sheets("Inspection Check").Range("D" & row) = Bcell.Offset(0, 1).Value
      End If
    End If
  End If
Next Bcell

myBook.Close (False)

Application.ScreenUpdating = True

End Sub


Private Sub CheckQA(StartDate As Date, Optional EndDate As Date)

Dim Inspect As String
Dim wbk As Workbook
Dim DateCell As Range
Dim extract As String
Dim wbk2 As Workbook
Dim row As Integer
Dim tempstudy As String
Dim qadate As Date


row = 6

Application.ScreenUpdating = False

Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("F6:H106").ClearContents

Inspect = "G:\BIO\In Process Documents\In Process Inspections\In Process inspections tracking sheet.xls"
extract = "CheckQA.xlsm"

Set wbk2 = Workbooks(extract)
Set wbk = Workbooks.Open(Inspect)

qadate = StartDate - 80

With wbk.Sheets("Viral Clearance")
  For Each DateCell In Range("A:A")
    If DateCell >= qadate And DateCell <= EndDate Then
      wbk2.Sheets("Inspection Check").Range("H" & row) = DateCell.Value
      
      tempstudy = DateCell.Offset(0, 1).Value & "." & DateCell.Offset(0, 2).Value
      
      wbk2.Sheets("Inspection Check").Range("F" & row) = tempstudy
      wbk2.Sheets("Inspection Check").Range("G" & row) = DateCell.Offset(0, 4).Value
      row = row + 1
    End If
  Next DateCell
End With

wbk.Close (False)

Application.ScreenUpdating = True

End Sub

Private Sub indicator()

Dim CScell As Range
Dim QAcell As Range

Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("A6:A106").ClearContents

For Each CScell In Range("B6:B106")
  For Each QAcell In Range("F6:F106")
    If CScell = QAcell And IsEmpty(CScell) = False Then
        'CScell.Offset(0, -1).Value = "x"
        CScell.Font.Color = RGB(165, 165, 165)
        CScell.Offset(0, 1).Font.Color = RGB(165, 165, 165)
        CScell.Offset(0, 2).Font.Color = RGB(165, 165, 165)
        CScell.Font.Strikethrough = True
        CScell.Offset(0, 1).Font.Strikethrough = True
        CScell.Offset(0, 2).Font.Strikethrough = True
    End If
  Next QAcell
Next CScell

End Sub

Sub Clear_Click()
Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("A6:A106").ClearContents
Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("B6:D106").ClearContents
Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("B6:D106").Font.Color = RGB(0, 0, 0)
Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("B6:D106").Font.Strikethrough = False
Workbooks("CheckQA.xlsm").Worksheets("Inspection Check").Range("F6:H106").ClearContents
End Sub

