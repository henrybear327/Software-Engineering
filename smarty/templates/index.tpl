<html>
<body>
{{$hello|capitalize|cat:" World<br>"}}
{{$str1|capitalize|cat:"<br>"}}
{{$str2|cat:" Information Engineering<br>"}}
{{$str3|date_format:"%Yyear%mmonth%dday"|cat:"<br>"}}
{{$str4|default:"NA<br>"}}
{{$str5|indent:8:"*"|cat:"<br>"}}
{{$str6|lower|cat:"<br>"}}
{{$str7|replace:"No":"Have"|replace:"no":"have"|cat:"<br>"}}
</body>
</html>
