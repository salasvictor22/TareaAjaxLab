<%
' Array con nombres
Dim names
names = Array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", _
              "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", _
              "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", _
              "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", _
              "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky")

' Obtiene el parámetro "q" de la URL
Dim q
q = Request.QueryString("q")

Dim hint
hint = ""

' Busca todas las sugerencias del array si "q" no está vacío
If Len(q) > 0 Then
    q = LCase(q)
    For Each name In names
        If InStr(LCase(name), q) = 1 Then
            If Len(hint) = 0 Then
                hint = name
            Else
                hint = hint & ", " & name
            End If
        End If
    Next
End If

' Imprime la respuesta
If Len(hint) = 0 Then
    Response.Write "no suggestion"
Else
    Response.Write hint
End If
%>