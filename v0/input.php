<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survey</title>
</head>

<body>
<h1>問卷調查</h1>
<p>請輸入你的個人基本資料</p>

<form method="post" action="show.php">

  <p>姓名：<input type="text"></p>

  <p>密碼：<input type="password"></p>

  <p>性別：
  	<input type="radio">男
    <input type="radio">女
  </p>

  <p>血型：
  	<input type="radio">A
  	<input type="radio">B
  	<input type="radio">O
  	<input type="radio">AB
  	<input type="radio">未知
  </p>

  <p>生日：
  	<select>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
  	</select>
  	年 
  	<select>
  		<option value="1">一</option>
  		<option value="2">二</option>
  		<option value="3">三</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
  		<option>9</option>
  		<option>10</option>
  		<option>11</option>
  		<option>12</option>
  	</select>
  	月
  	<select>
  		<option>1</option>
  		<option>2</option>
  		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
  		<option>9</option>
  		<option>10</option>
  		<option>11</option>
  		<option>12</option>
  		<option>13</option>
  		<option>14</option>
  		<option>15</option>
  		<option>16</option>
  		<option>17</option>
  		<option>18</option>
  		<option>19</option>
  		<option>20</option>
  		<option>21</option>
  		<option>22</option>
  		<option>23</option>
  		<option>24</option>
  		<option>25</option>
  		<option>26</option>
  		<option>27</option>
  		<option>28</option>
  		<option>29</option>
  		<option>30</option>
  		<option>31</option>
  	</select>
  	日
  </p>

  <p>是否已婚：<input type="checkbox">(已婚請勾選)</p>

  <p>休閒興趣：
	  <input type="checkbox">音樂 
	  <input type="checkbox">閱讀 
	  <input type="checkbox">旅遊 
	  <input type="checkbox">美食
  </p>

  <p>個人簡介：
  	<textarea rows="6" cols="40"></textarea>
  </p>

  <p><input type="submit" value="送出"></p>

</form>

</body>
</html>