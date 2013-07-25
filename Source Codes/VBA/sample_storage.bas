Attribute VB_Name = "Module1"
Sub FillSamples()

Dim StudyNumber As String
Dim SampleID As String
Dim SampleRange As String
Dim StartSample As Integer
Dim MiddleSample As Integer
Dim EndSample As Integer
Dim FirstSample As String
Dim LastSample As String
Dim NumberOfSamples As Integer
Dim i As Integer
Dim SampleCounter As Integer
Dim FirstInteger As Integer
Dim LastInteger As Integer
Dim TestNull As String
Dim BSVYesOrNo As Boolean

'
' Copy Prefix
'

ActiveDocument.FormFields("StudNum").Select
StudyNumber = Selection.Text

SampleID = Left(StudyNumber, 6)

'
' Read and interpret /coded/ statement [#,#]
'

ActiveDocument.FormFields("SS01").Select
SampleRange = Selection.Text

StartSample = InStr(SampleRange, "[")
MiddleSample = InStr(SampleRange, ",")
EndSample = InStr(SampleRange, "]")

'
' Check if Study
'

If InStr(UCase(StudyNumber), "BSV") > 0 Then
    BSVYesOrNo = True
End If

'
' Fill samples for first column
'

If BSVYesOrNo = True Then

    If StartSample > 0 And MiddleSample > 0 And EndSample > 0 Then
        FirstSample = Mid(SampleRange, StartSample + 1, MiddleSample - StartSample - 1)
        LastSample = Mid(SampleRange, MiddleSample + 1, EndSample - MiddleSample - 1)
        
        FirstInteger = CInt(FirstSample)
        LastInteger = CInt(LastSample)
        
        
        If LastInteger > FirstInteger Then
            NumberOfSamples = LastInteger - FirstInteger
            
            If NumberOfSamples < 25 Then
                
                ActiveDocument.FormFields("SS02").Select
                    TestNull = Selection.Text
                
                    If Len(TestNull) <> 5 Then
                        For j = 2 To 25
                            If j < 10 Then
                                ActiveDocument.FormFields("SS0" & j).Result = ""
                            ElseIf j >= 10 Then
                                ActiveDocument.FormFields("SS" & j).Result = ""
                            End If
                        Next j
                    End If
                    
                    SampleCounter = FirstSample - 1
                
                    For i = 1 To NumberOfSamples + 1
                        If i >= 1 And i < 10 Then
                            ActiveDocument.FormFields("SS0" & i).Result = SampleID & "-" & SampleCounter + i
                        ElseIf i >= 10 Then
                            ActiveDocument.FormFields("SS" & i).Result = SampleID & "-" & SampleCounter + i
                        End If
                    Next i
                End If
                
            ElseIf NumberOfSamples > 25 Then
                Exit Sub
            End If
            
        ElseIf LastInteger < FirstInteger Then
            Exit Sub
    End If

Else
    Exit Sub
End If
    


End Sub

Sub FillSamples2()

Dim StudyNumber As String
Dim SampleID As String
Dim SampleRange As String
Dim StartSample As Integer
Dim MiddleSample As Integer
Dim EndSample As Integer
Dim FirstSample As String
Dim LastSample As String
Dim NumberOfSamples As Integer
Dim i As Integer
Dim SampleCounter As Integer
Dim FirstInteger As Integer
Dim LastInteger As Integer
Dim TestNull As String
Dim BSVYesOrNo As Boolean

'
' Copy prefix
'

ActiveDocument.FormFields("StudNum").Select
StudyNumber = Selection.Text

SampleID = Left(StudyNumber, 6)

'
' Read and interpret /coded/ statement
'

ActiveDocument.FormFields("SS26").Select
SampleRange = Selection.Text

StartSample = InStr(SampleRange, "[")
MiddleSample = InStr(SampleRange, ",")
EndSample = InStr(SampleRange, "]")

'
' Check if study
'

If InStr(UCase(StudyNumber), "BSV") > 0 Then
    BSVYesOrNo = True
End If

'
' Fill samples for second column
'

If BSVYesOrNo = True Then

    If StartSample > 0 And MiddleSample > 0 And EndSample > 0 Then
        FirstSample = Mid(SampleRange, StartSample + 1, MiddleSample - StartSample - 1)
        LastSample = Mid(SampleRange, MiddleSample + 1, EndSample - MiddleSample - 1)
        
        FirstInteger = CInt(FirstSample)
        LastInteger = CInt(LastSample)
        
        
        If LastInteger > FirstInteger Then
            NumberOfSamples = LastInteger - FirstInteger
            
            If NumberOfSamples < 25 Then
                ActiveDocument.FormFields("SS27").Select
                TestNull = Selection.Text
            
                If Len(TestNull) <> 5 Then
                    For j = 26 To 50
                        ActiveDocument.FormFields("SS" & j).Result = ""
                    Next j
                End If
                
'                SampleCounter = FirstSample - 1
                SampleCounter = FirstSample
                
                Dim Counter As Integer
                
                Counter = 0
                
                For i = 26 To NumberOfSamples + 26
                    ActiveDocument.FormFields("SS" & i).Result = SampleID & "-" & SampleCounter + Counter
                    Counter = Counter + 1
                Next i
            ElseIf NumberOfSamples > 25 Then
                Exit Sub
            End If
        ElseIf LastInteger < FirstInteger Then
            Exit Sub
        End If
    End If
    
Else
    Exit Sub
End If


End Sub

