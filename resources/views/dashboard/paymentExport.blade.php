<!DOCTYPE html>
<html>
<head>
<style>
 @font-face {
    font-family: 'DejaVu Sans';
    src: url('../fnt/DejaVuSans/DejaVuSans-webfont.eot');
    src: url('../fnt/DejaVuSans/DejaVuSans-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fnt/DejaVuSans/DejaVuSans-webfont.woff') format('woff'),
         url('../fnt/DejaVuSans/DejaVuSans-webfont.ttf') format('truetype'),
         url('../fnt/DejaVuSans/DejaVuSans-webfont.svg#DejaVuSansBook') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'DejaVu Sans';
    src: url('../fnt/DejaVuSans/DejaVuSans-Oblique-webfont.eot');
    src: url('../fnt/DejaVuSans/DejaVuSans-Oblique-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fnt/DejaVuSans/DejaVuSans-Oblique-webfont.woff') format('woff'),
         url('../fnt/DejaVuSans/DejaVuSans-Oblique-webfont.ttf') format('truetype'),
         url('../fnt/DejaVuSans/DejaVuSans-Oblique-webfont.svg#DejaVuSansOblique') format('svg');
    font-weight: normal;
    font-style: italic;

}

@font-face {
    font-family: 'DejaVu Sans';
    src: url('../fnt/DejaVuSans/DejaVuSans-Bold-webfont.eot');
    src: url('../fnt/DejaVuSans/DejaVuSans-Bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fnt/DejaVuSans/DejaVuSans-Bold-webfont.woff') format('woff'),
         url('../fnt/DejaVuSans/DejaVuSans-Bold-webfont.ttf') format('truetype'),
         url('../fnt/DejaVuSans/DejaVuSans-Bold-webfont.svg#DejaVuSansBold') format('svg');
    font-weight: bold;
    font-style: normal;

}

@font-face {
    font-family: 'DejaVu Sans';
    src: url('../fnt/DejaVuSans/DejaVuSans-BoldOblique-webfont.eot');
    src: url('../fnt/DejaVuSans/DejaVuSans-BoldOblique-webfont.eot?#iefix') format('embedded-opentype'),
         url('../fnt/DejaVuSans/DejaVuSans-BoldOblique-webfont.woff') format('woff'),
         url('../fnt/DejaVuSans/DejaVuSans-BoldOblique-webfont.ttf') format('truetype'),
         url('../fnt/DejaVuSans/DejaVuSans-BoldOblique-webfont.svg#DejaVuSansBoldOblique') format('svg');
    font-weight: bold;
    font-style: italic;
}
*{
    font-family: 'DejaVu Sans';
}
#customers {
 

  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>مممممم</h1>

<table id="customers">
  <tr>
    <th>Campagin</th>
    <th>Amount</th>
    <th>Status</th>
  </tr>
  @foreach($pay as $user)
  <tr>
    <td>{{$user->campaign->title}}</td>

    <td>  {{$user->status}}</td>
    <td> {{$user->amount}}</td>
  </tr>
  @endforeach
  
</table>

</body>
</html>


