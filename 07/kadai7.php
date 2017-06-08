
<!DOCTYPE html>

<html lang="ja">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

</head>


<link rel="stylesheet" href="kadai7.css">

<body>

    <div class="tittle">三井くんのClub日記</div>
    
<div class="club1">

   <div class="img1">
     <p>【AGEHA】</p>
       <a href="http://www.ageha.com/"><img src="img/ageha.jpg" width="400" height="280"></a>
    </div>
    
    <div class="img2">
    <p>【CAMELOT】</p>
        <a href="http://www.clubcamelot.jp/"><img src="img/camelot.jpg" width="400" height="280"></a>
    </div>
    
    <div class="img3">s
    <p>【ELE TOKYO】</p>
        <a href="http://www.eletokyo.com/"><img src="img/eletokyo.jpg" width="400" height="280"></a>
    </div>
</div>

<div class="club2">
    <div class="img4">
    <p>【ESPRIT TOKYO】</p>
    <a href="http://esprit-tokyo.net/">
    <img src="img/espuri.jpg" width="400" height="280"></a>
    </div>
    
    <div class="img5">
    <p>【MUSE】</p>
    <a href="http://muse-web.com/">
        <img src="img/muse.jpg" width="400" height="280"></a>
    </div>
    
    <div class="img6">
    <p>【V2 TOKYO】</p>
    <a href="http://www.v2tokyo.com/">
        <img src="img/v2tokyo.png" width="400" height="280"></a>
    </div>
</div>


<!-- Head[Start] -->
<!--
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
</header>
-->
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
       <legend>三井くんの結果</legend>
    
<!-- Main[End] -->

<p>遊びに行った日</p>
<select name="year">
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2016">2017</option>
</select>年
<select name="month">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>月
<select name="day">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>日


<p>遊びに行ったクラブ</p>
<select name="club">
<option value="AGEHA">AGEHA</option>
<option value="CAMELOT">CAMELOT</option>
<option value="ELE TOKYO">ELE TOKYO</option>
<option value="ESPRIT TOKYO">ESPRIT TOKYO</option>
<option value="MUSE">MUSE</option>
<option value="V2 TOKYO">V2 TOKYO</option>
</select>



<p>女の子のタイプ</p>
<select name="type">
<option value="コンサバ系">コンサバ系</option>
<option value="ロリ系">ロリ系</option>
<option value="ギャル系">ギャル系</option>
<option value="バブリー系">バブリー系</option>
<option value="おばあちゃん系">おばあちゃん系</option>
</select>


<p>連絡先</p>
<select name="adress">
<option value="GET">Get!</option>
<option value="NG">NG</option>
</select>

<div class="sub">
<input type="submit" value="送信" id="submit">
</div>


</fieldset>
    </div>
    </form>

</body>



</html>


