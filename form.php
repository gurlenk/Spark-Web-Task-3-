
<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="utf-8">
  <title>Pay</title>
</head>

<style>

body{ margin: 0; padding: 0; font-family: sans-serif; background: url(../donate/giving.jpg) no-repeat;
   background-size: cover; height: 100vh; width: 100%; background-position: 0 -69px;}
.wrapper{ width: 400px; height: 440px; padding: 50px 40px; box-sizing: border-box; position: absolute;
          left: 55%; top: 29%; transform: translate(-50% -50%); box-shadow: 8px 8px 50px #000; color: #fff}
 .wrapper h1{ margin: 0; padding: 0; text-align: center; margin-bottom: 8%; color:#ffffff;
              font-size: 22px; font-weight: bold;}
 .wrapper label{ margin: 0; padding: 0; font-weight: bold; }
 .wrapper input{ width: 100%; background: transparent; border: none; margin-bottom: 20px;
                 font-size: 15px; padding: 6px 1px; box-sizing: border-box; color:#ffffff; border-bottom: 1px solid #ddd;
                 outline: none; height: 30px; }
 .wrapper select{ width: 100%; background: #556B2F; margin: 8px 0;  margin-bottom: 20px; border: 1px solid #fff;
                  display: inline-block; outline: none; font-size: 15px; padding: 2px -1px; color:#ffffff}
 .wrapper input[type="submit"]{ background: #556B2F; cursor: pointer; color: #fff; border: none; height: 40px; font-weight: bold; border-radius: 20px;}
 .wrapper input[type="submit"]:hover { background: #6B8E23; transition: .6s;}

</style>

<body>
  <div class="wrapper">
    <form action="pay.php" method="post">
    <h1>Your Details</h1>
    <label>  Name </label>
    <input type="text" name="your_name" >
    <label> Email </label>
    <input type="text" name="your_email" >
    <label>  Amount </label>
    <input type="text" name="your_amount" >
    <label> Cause </label>
    <select name="purpose">
      <option value="Donate daily expense for visually challenged">Donate daily expense for visually challenged</option>
      <option value="Donate one day's education for girl child">Donate one day's education for girl child</option>
      <option value="Donate health and personal care for orphans">Donate health and personal care for orphans</option>
      <option value="Donate one day's meals for senior citizen">Donate one day's meals for senior citizen</option>
    </select>
    <input type="submit" value="Submit">
   </form>
  </div>
</body>
</html>
