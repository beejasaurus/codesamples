Attribute VB_Name = "Module1"
Sub Button1_Click()

Application.ScreenUpdating = False

Dim Bcell As Range
Dim row As Integer
Dim i As Integer
Dim amt As Integer
Dim counter As Integer

Worksheets("Print Sheet").Range("A2:G300").ClearContents

row = 1

For Each Bcell In Range("B4:B79")
  
  If IsEmpty(Bcell) = False Then
    counter = 0
    i = 0
    amt = Sheets("Media Labels").Cells(Bcell.row, Bcell.Column + 1).Value
    Do While i < amt
      row = row + 1
      i = i + 1
      counter = counter + 1
      Sheets("Media Labels").Range(Cells(Bcell.row, Bcell.Column + 3), Cells(Bcell.row, Bcell.Column + 8)).Copy
      Sheets("Print Sheet").Range("B" & row).PasteSpecial xlPasteValues
      Sheets("Print Sheet").Range("A" & row).Value = counter
    Loop
  End If
Next Bcell



Dim databasefile As String
Dim wbk As Workbook

'databasefile = "C:\_Media Labels\Label Files\database.xlsx"
databasefile = "G:\Files\Bio\Process\Clearance\_Media Labels\Label Files\database.xlsx"

Application.ScreenUpdating = False
ThisWorkbook.Save
Sheets("Print Sheet").Range("A:G").Copy

Set wbk = Workbooks.Open(databasefile)
With wbk.Sheets("Print Sheet")
  .Range("A:G").PasteSpecial Paste:=xlPasteAll, Operation:=xlNone, SkipBlanks:=False, Transpose:=False
End With

wbk.Save
wbk.Close
  
Application.ScreenUpdating = True

End Sub



Sub clear_Click()
Worksheets("Media Labels").Range("B4:C79").ClearContents
Worksheets("Print Sheet").Range("A2:G300").ClearContents
End Sub
