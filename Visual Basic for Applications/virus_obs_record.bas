Attribute VB_Name = "Module1"
Global k As Integer
Global i As Integer
Global j As Variant
Sub CheckforDil()
    
    Dim StudNum As String
    Dim TempLen As Integer
    Dim IsBSVResult As Boolean
    Dim IsPPV As Integer
    Dim IsEMC As Integer
    Dim IsHAV As Integer
    Dim IsBPV As Integer
    Dim IsTox As Integer
    
    StudNum = selectFF("StudyNumber")
    If UCase(StudNum) = "CLEAR" Then
        Call clearEverything(1)
        Call ffResult("StudyNumber", "")
        Call gotoFF("DayOnTest")
    End If
            
    
    '
    ' Check for extended dilution
    '
    
    Dim SampleID() As Variant
    ReDim SampleID(1 To 7) As Variant
    
    For i = 1 To 7
        SampleID(i) = selectFF("SampleID" & i)
    Next i
    For Each j In SampleID
        If UCase(j) = "SVC" Then
            Call gotoFF("DayOnTest")
            Exit Sub
        End If
    Next
    
    '
    ' Detect Study - Contains BSV, Is PPV/EMC/Std, Proper LEN
    '
    
    
    IsBSVResult = isBSV(StudNum)
    IsPPV = InStr(1, StudNum, "022285")
    IsEMC = InStr(1, StudNum, "022269")
    IsPPVt = InStr(1, StudNum, "022185")
    IsEMCt = InStr(1, StudNum, "022169")
    isHAVt = InStr(1, StudNum, "022116")
    isBPVt = InStr(1, StudNum, "022153")
    IsTox = InStr(1, StudNum, "0221")
    
    
    
    If IsPPVt > 0 Or IsEMCt > 0 Then
        Call ToxExtFil
        Exit Sub
    ElseIf isHAVt > 0 Or isBPVt > 0 Then
        Call Tox24Fil
        Exit Sub
    ElseIf IsPPVt = 0 And IsEMCt = 0 And isHAVt = 0 And isBPVt = 0 And IsTox > 0 Then
        Call ToxStdFil
        Exit Sub
    End If
    
    
    '
    ' Fill FormFields with appropriate dilutions
    '
    
    If IsBSVResult Then
        If IsPPV > 0 Or IsEMC > 0 Then
            Call fillExtended
            Exit Sub
        ElseIf IsPPVt > 0 Or IsEMCt > 0 Then
            Call ToxExtFil
            Exit Sub
        ElseIf isHAVt > 0 Or isBPVt > 0 Then
            Call Tox24Fil
            Exit Sub
        ElseIf IsPPVt = 0 And IsEMCt = 0 And isHAVt = 0 And isBPVt = 0 And IsTox > 0 Then
            Call ToxStdFil
            Exit Sub
        Else
            Call fillSTD
            Exit Sub
        End If
    End If

End Sub

Sub SampleID1()
    Call samples("SampleID1")
End Sub
Sub SampleID2()
    Call samples("SampleID2")
End Sub
Sub SampleID3()
    Call samples("SampleID3")
End Sub
Sub SampleID4()
    Call samples("SampleID4")
End Sub
Sub SampleID5()
    Call samples("SampleID5")
End Sub
Sub SampleID6()
    Call samples("SampleID6")
End Sub
Sub SampleID7()
    Call samples("SampleID7")
End Sub
Sub ConditionalFormField1()
    Call ConditionalFormFields("A", 1)
End Sub
Sub ConditionalFormField2()
    Call ConditionalFormFields("B", 2)
End Sub
Sub ConditionalFormField3()
    Call ConditionalFormFields("C", 3)
End Sub
Sub ConditionalFormField4()
    Call ConditionalFormFields("D", 4)
End Sub
Sub ConditionalFormField5()
    Call ConditionalFormFields("E", 5)
End Sub
Sub ConditionalFormField6()
    Call ConditionalFormFields("F", 6)
End Sub
Sub ConditionalFormField7()
    Call ConditionalFormFields("G", 7)
End Sub

Sub DayOnTest()
    Dim FieldValue As String
    Dim today As Date
    FieldValue = selectFF("DayOnTest")
    Set CC = ActiveDocument.ContentControls(1)
    
    today = Date
    
    If IsDate(FieldValue) Then
        i = DateValue(today) - DateValue(FieldValue)
        Call ffResult("DayOnTest", i)
    End If

    If UCase(FieldValue) = "CLEAR" Then
        For i = 1 To 7
            Call ffResult("SampleID" & i, "")
        Next i
        For i = 1 To 17
            Call ffResult("SampleA" & i, "")
            Call ffResult("SampleB" & i, "")
            Call ffResult("SampleC" & i, "")
            Call ffResult("SampleD" & i, "")
            Call ffResult("SampleE" & i, "")
            Call ffResult("SampleF" & i, "")
            Call ffResult("SampleG" & i, "")
        Next i
        CC.range.Text = "NA"
        Call ffResult("DayOnTest", "")
    End If
    
    If UCase(FieldValue) = "CLEAR S" Then
        For i = 1 To 7
            Call ffResult("SampleID" & i, "")
        Next i
        CC.range.Text = "NA"
        Call ffResult("DayOnTest", "")
    End If
    
    If UCase(FieldValue) = "CLEAR T" Then
        For i = 1 To 17
            Call ffResult("SampleA" & i, "")
            Call ffResult("SampleB" & i, "")
            Call ffResult("SampleC" & i, "")
            Call ffResult("SampleD" & i, "")
            Call ffResult("SampleE" & i, "")
            Call ffResult("SampleF" & i, "")
            Call ffResult("SampleG" & i, "")
        Next i
        CC.range.Text = "NA"
        Call ffResult("DayOnTest", "")
    End If
    
End Sub

Sub interpretDilution()
    Dim FieldValue As String
    
    Dim FirstValue As String
    Dim SecondValue As Integer
    Dim ThirdValue As Integer
    
    Dim LeftBracket As Integer
    Dim comma1 As Integer
    Dim comma2 As Integer
    Dim RightBracket As Integer
    
    FieldValue = selectFF("Dilution1")
       
    LeftBracket = InStr(1, FieldValue, "[")
    comma1 = InStr(1, FieldValue, ",")
    comma2 = InStr(comma1 + 1, FieldValue, ",")
    RightBracket = InStr(1, FieldValue, "]")
    
    If LeftBracket > 0 Then
        If comma1 > 0 Then
            If comma2 > 0 Then
                If RightBracket > 0 Then
                    FirstValue = Mid(FieldValue, LeftBracket + 1, comma1 - 2)
                    SecondValue = Mid(FieldValue, comma1 + 1, comma2 - comma1 - 1)
                    ThirdValue = Mid(FieldValue, comma2 + 1, RightBracket - comma2 - 1)
                    
                    Call fillScheme(FirstValue, SecondValue, ThirdValue, "DilExp1")
                End If
            End If
        End If
    ElseIf UCase(FieldValue) = "CLEAR" Then
        For i = 1 To 17
            Call ffResult("Dilution" & i, "")
            Call ffResult("DilExp" & i, "")
            Call checkboxResult("Check" & i, False)
        Next i
    End If
    
    
End Sub

Public Sub fillA()
    k = getEndDil
    Call interpretCPE("A", k)
End Sub
Public Sub fillB()
    k = getEndDil
    Call interpretCPE("B", k)
End Sub
Public Sub fillC()
    k = getEndDil
    Call interpretCPE("C", k)
End Sub
Public Sub fillD()
    k = getEndDil
    Call interpretCPE("D", k)
End Sub
Public Sub fillE()
    k = getEndDil
    Call interpretCPE("E", k)
End Sub
Public Sub fillF()
    k = getEndDil
    Call interpretCPE("F", k)
End Sub
Public Sub fillG()
    k = getEndDil
    Call interpretCPE("G", k)
End Sub
Function getEndDil()
    Dim checkDil() As Variant
    ReDim checkDil(1 To 17) As Variant
    
    For i = 1 To 17
        checkDil(i) = selectFF("Dilution" & i)
        If Len(checkDil(i)) = 5 Then
            getEndDil = i - 1
            Exit For
        End If
    Next i
End Function
Private Sub interpretCPE(columnletter As String, range As Integer)
    Dim FieldValue As String
    FieldValue = selectFF("Sample" & columnletter & "1")
    
    If UCase(FieldValue) = "T1" Then
        For i = 1 To range
            Call ffResult("Sample" & columnletter & i, "/8")
        Next i
    ElseIf UCase(FieldValue) = "T2" Then
        For i = 1 To range - 2
            Call ffResult("Sample" & columnletter & i, "/8")
        Next i
    End If
End Sub

Private Sub NC(Optional columnletter As String)
    
    For i = 1 To 17
        Call ffResult("Sample" & columnletter & i, "")
    Next i
    
    Call ffResult("Sample" & columnletter & "1", "/8")

End Sub
Private Sub SVCPPV(Optional columnletter As String)
    '
    ' Correct Dilution Scheme
    '
    k = 15
    For i = 16 To 17
        Call checkboxResult("Check" & i, False)
        Call ffResult("Dilution" & i, "5")
        Call ffResult("DilExp" & i, "-" & k)
        k = k + 1
    Next i
    '
    ' Fill in /8
    '
    Call fillRange(columnletter, 8, 16)
    '
    ' Set SVC Calculation
    '
    Call ccResult("log(5^-8) + log(5)/2 - log(5) * (_________/8) + log(0.050) = log______________TCID50/ml")

End Sub

Private Sub SVCStd(Optional columnletter As String)
    '
    ' Correct Dilution Scheme
    '
    
    k = 13
    For i = 14 To 15
        Call ffResult("Dilution" & i, "5")
        Call ffResult("DilExp" & i, "-" & k)
        k = k + 1
        Call checkboxResult("Check" & i, False)
    Next i
    
    For i = 16 To 17
        Call ffResult("Dilution" & i, "")
        Call ffResult("DilExp" & i, "")
        Call checkboxResult("Check" & i, True)
    Next i
    
    '
    ' Fill in /8
    '
    
    Call fillRange(columnletter, 6, 14)
    
    '
    ' Set SVC Calculation
    '
    Call ccResult("log(5^-6) + log(5)/2 - log(5) * (_________/8) + log(0.050) = log______________TCID50/ml")

End Sub

Private Sub SVC24(Optional columnletter As String)
    '
    ' Correct Dilution Scheme
    '
    
    k = 13
    For i = 14 To 15
        Call ffResult("Dilution" & i, "5")
        Call ffResult("DilExp" & i, "-" & k)
        k = k + 1
        Call checkboxResult("Check" & i, False)
    Next i
    
    For i = 16 To 17
        Call ffResult("Dilution" & i, "")
        Call ffResult("DilExp" & i, "")
        Call checkboxResult("Check" & i, True)
    Next i
    
    '
    ' Fill in /8
    '
    
    Call fillRange(columnletter, 6, 14)
    
    '
    ' Set SVC Calculation
    '
    Call ccResult("log(5^-6) + log(5)/2 - log(5) * (_________/8) + log(0.250) = log______________TCID50/ml")

End Sub

Function selectFF(var As String)
    ActiveDocument.FormFields(var).Select
    selectFF = Selection.Text
End Function

Private Sub gotoFF(var As String)
    ActiveDocument.FormFields(var).Select
End Sub

Function isBSV(var As String) As Boolean

    Dim BSV As String
    Dim TempLen As Integer
    
    BSV = Right(var, 3)
    TempLen = Len(var)
    If UCase(BSV) = "BSV" Then
        If TempLen >= 17 Then
            isBSV = True
        Else
            isBSV = False
        End If
    End If


End Function

Private Sub fillExtended()
    '
    ' Extended Dilutions for PPV and EMC
    '
    
    Call fillScheme(5, 0, 14, "DayOnTest")
End Sub

Private Sub fillSTD()
    '
    'Standard Dilution
    '
    Call fillScheme(5, 0, 12, "DayOnTest")

End Sub

Private Sub ffResult(var As String, var2 As Variant)
    ActiveDocument.FormFields(var).Result = var2
End Sub

Private Sub checkboxResult(var As String, var2 As Boolean)
    ActiveDocument.FormFields(var).CheckBox.Value = var2
End Sub

Sub samples(var As String)
    
    Dim StudyNumber As String
    Dim SampleIDPrefix As String
    Dim BSV As String
    
    '
    ' Check for text
    '
    
    Dim SID As String
    
    SID = selectFF(var)
    
    If UCase(SID) = "SVC" Then
        Call gotoFF(var)
        Exit Sub
    ElseIf UCase(SID) = "NC" Then
        Call gotoFF(var)
        Exit Sub
    ElseIf Len(SID) > 5 Then
        Call gotoFF(var)
        Exit Sub
    
    End If
    
    '
    ' Prefill with sample prefix
    '
    
    StudyNumber = selectFF("StudyNumber")
    
    BSV = isBSV(StudyNumber)
    SampleIDPrefix = Left(StudyNumber, 6)
    
    If BSV Then
        Call ffResult(var, SampleIDPrefix & "-")
    End If
    
    Call gotoFF(var)

End Sub

Sub ConditionalFormFields(columnletter As String, columnNumber As Integer)

    Dim SampID As String
    Dim StudNum As String
    Dim TempLen As Integer
    Dim IsBSVResult As Boolean
    Dim NCCheck As String
    Dim SVCCheck As String
    Dim SID As String
    Dim IsPPV As Integer
    Dim IsEMC As Integer
    Dim IsHAV As Integer
    Dim IsBPV
    
    '
    ' Check for Text
    '
    NCCheck = selectFF("Sample" & columnletter & "1")
    SVCCheck = selectFF("Sample" & columnletter & "1")
    
    SID = selectFF("SampleID" & columnNumber)
    
    If UCase(SID) = "SVC" Then
        If SVCCheck = "/8" Then
            Call gotoFF("SampleID" & columnNumber)
            Exit Sub
        End If
    ElseIf UCase(SID) = "NC" Then
        If NCCheck = "/8" Then
            Call gotoFF("SampleID" & columnNumber)
            Exit Sub
        End If
    ElseIf UCase(SID) = "CLEAR" Then
        For i = 1 To 17
            Call ffResult("Sample" & columnletter & i, "")
        Next i
        Call ffResult("SampleID" & columnNumber, "")
    End If
    
    '
    ' Check for NC or SVC
    '
    StudNum = selectFF("StudyNumber")
    SampID = selectFF("SampleID" & columnNumber)
    IsBSVResult = isBSV(StudNum)
    IsPPV = InStr(1, StudNum, "022185")
    IsEMC = InStr(1, StudNum, "022169")
    IsHAV = InStr(1, StudNum, "022116")
    IsBPV = InStr(1, StudNum, "022153")

    If IsBSVResult Then
        If UCase(SampID) = "NC" Then
            Call NC(columnletter)
        ElseIf UCase(SampID) = "SVC" Then
            If IsPPV > 0 Or IsEMC > 0 Then
                Call SVCPPV(columnletter)
            ElseIf IsHAV > 0 Or IsBPV > 0 Then
                Call SVC24(columnletter)
            Else
                Call SVCStd(columnletter)
            End If
        End If
    End If


End Sub

Private Sub fillRange(columnletter As String, startval As Integer, endval As Integer)
    
    For i = 1 To 17
        If i < startval + 1 Then
            Call ffResult("Sample" & columnletter & i, "")
        ElseIf i >= startval Then
            If i < endval + 2 Then
                Call ffResult("Sample" & columnletter & i, "/8")
            End If
        End If
    Next i

End Sub

Private Sub fillScheme(base As String, startval As Integer, endval As Integer, Optional destination As String)
    
    If endval - startval < 17 Then
        k = 1
        If startval > 0 Then
            k = startval
            For i = 1 To endval - startval + 1
                Call ffResult("Dilution" & i, base)
                Call ffResult("DilExp" & i, "-" & k)
                k = k + 1
            Next i
        ElseIf startval = 0 Then
            Call ffResult("Dilution1", "Und")
            For i = 2 To endval + 1
                Call ffResult("Dilution" & i, base)
                Call ffResult("DilExp" & i, "-" & k)
                k = k + 1
            Next i
        End If
        k = endval - startval + 2
        If k < 17 Then
            For i = k To 17
                Call checkboxResult("Check" & i, True)
                k = k + 1
            Next i
        End If
        Call gotoFF(destination)
        
    End If

End Sub


Private Sub ToxExtFil()
    Call fillScheme(5, 7, 16, "DayOnTest")
    Call ffResult("Dilution1", "Und")
    Call ffResult("DilExp1", "")
    Call ffResult("SampleID1", "NC")
    k = getEndDil
    Call ffResult("SampleA1", "/8")
    Call ffResult("SampleID2", "SVC")
    Call fillRange("B", 1, k - 1)
    For i = 3 To 7
        Call checkboxResult("NA" & i, True)
    Next i
    Call ccResult("log(5^-8) + log(5)/2 - log(5) * (_________/8) + log(0.050) = log______________TCID50/ml")
End Sub
Private Sub Tox24Fil()
    Call fillScheme(5, 5, 14, "DayOnTest")
    Call ffResult("Dilution1", "Und")
    Call ffResult("DilExp1", "")
    Call ffResult("SampleID1", "NC")
    k = getEndDil
    Call ffResult("SampleA1", "/8")
    Call ffResult("SampleID2", "SVC")
    Call fillRange("B", 1, k - 1)
    For i = 3 To 7
        Call checkboxResult("NA" & i, True)
    Next i
    Call ccResult("log(5^-6) + log(5)/2 - log(5) * (_________/8) + log(0.250) = log______________TCID50/ml")
End Sub
Private Sub ToxStdFil()
    Call fillScheme(5, 5, 14, "DayOnTest")
    Call ffResult("Dilution1", "Und")
    Call ffResult("DilExp1", "")
    Call ffResult("SampleID1", "NC")
    k = getEndDil
    Call ffResult("SampleA1", "/8")
    Call ffResult("SampleID2", "SVC")
    Call fillRange("B", 1, k - 1)
    For i = 3 To 7
        Call checkboxResult("NA" & i, True)
    Next i
    Call ccResult("log(5^-6) + log(5)/2 - log(5) * (_________/8) + log(0.050) = log______________TCID50/ml")
End Sub

Private Sub ccResult(var As String)
    Dim CC As ContentControl
    Set CC = ActiveDocument.ContentControls(1)
    CC.range.Text = var
End Sub

Private Sub clearEverything(var As Integer)
    
    Dim letters() As Variant
    ReDim letters(1 To 7) As Variant
    
    letters(1) = "A"
    letters(2) = "B"
    letters(3) = "C"
    letters(4) = "D"
    letters(5) = "E"
    letters(6) = "F"
    letters(7) = "G"
    
    Select Case var
    Case 1
        For i = 1 To 7
            Call ffResult("SampleID" & i, "")
        Next i
        
        For i = 1 To 7
            Call checkboxResult("NA" & i, False)
        Next i
        
        For Each j In letters
            For i = 1 To 17
                Call ffResult("Sample" & j & i, "")
            Next i
        Next
        
        For i = 1 To 17
            Call ffResult("Dilution" & i, "")
            Call ffResult("DilExp" & i, "")
            Call checkboxResult("Check" & i, False)
        Next i
        
        
        
        Call ccResult("NA")
        Call ffResult("DayOnTest", "")
        
        
    Case 2
        For i = 1 To 7
            Call ffResult("SampleID" & i, "")
        Next i
        
        For i = 1 To 7
            Call checkboxResult("NA" & i, False)
        Next i
        
        For Each j In letters
            For i = 1 To 17
                Call ffResult("Sample" & j & i, "")
            Next i
        Next
        
        Call ccResult("NA")
    Case 3
        Call ccResult("NA")
    End Select
End Sub
