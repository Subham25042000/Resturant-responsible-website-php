<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptions</title>
    <style>
        body{
			.my-element {
      background-image: url("Admin/bg2.jpg");
      background-repeat: no-repeat;
      background-size: cover;
	  color:black;
			}

        }
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 2px solid #0e0303ce;
			border-radius: 5px;
			background-color: greenyellow;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"], textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #051306bb;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type="submit"]:hover {
			background-color: greenyellow;
		}
		

button {
  background-color: greenyellow;
  color: black;
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}
h1 {
      text-align: center;
      margin-top: 50px;
      color: #333;
    }

    .pricing-table {
      width: 800px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .pricing-card {
      width: 250px;
      background-color: greenyellow;
      padding: 20px;
      text-align: center;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
	  border-color: #333;
    }

    .pricing-card:hover {
      transform: scale(1.05);
    }

    .pricing-card h2 {
      color: #333;
    }

    .pricing-card .price {
      font-size: 32px;
      font-weight: bold;
      margin: 20px 0;
    }

    .pricing-card ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .pricing-card ul li {
      margin-bottom: 10px;
    }

    .pricing-card .cta-button {
      display: inline-block;
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }

    .pricing-card .cta-button:hover {
      background-color: #555;
    }
</style>
</head>
<body>
	<div class="my-element">
    <h2><i>"If a wish to have unlimited food with some discount thn this Subscriptions is the best option for you!!"</i></h2>
    <form>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required>
		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone" required>
		<label for="message">Message:</label>
		<textarea id="message" name="message" rows="5" required></textarea>
		<input type="submit" value="Submit">
	</form>
	
<div class="pricing-table">
    <div class="pricing-card">
      <h2>Basic Plan</h2>
      <div class="price">1800/month</div>
      <ul>
        <li>Only Breakfast</li>
        <li>Only Lunch</li>
        <li>Only Dinner</li>
		<li>Only Tiffin</li>
		<li>Any One You Can Access</li>
      </ul>
      <a href="#" class="cta-button">Subscribe</a>
    </div>

    <div class="pricing-card">
      <h2>Pro Plan</h2>
      <div class="price">3600/month</div>
      <ul>
        <li>Breakfast And Tiffin</li>
        <li>Lunch And Dinner</li>
        <li>Any Two You Can Access</li>
        
      </ul>
      <a href="#" class="cta-button">Subscribe</a>
    </div>

    <div class="pricing-card">
      <h2>Premium Plan</h2>
      <div class="price">5000/month</div>
      <ul>
        <li>You Can Access Breakfast, Lunch & Dinner</li>
        
      </ul>
      <a href="#" class="cta-button">Subscribe</a>
    </div>
  </div>
    <h3><i>For more details you can call our team, they will reach out soon</i></h3>
    <button type="button" class="btn btn-info">8328892010</button>
	</div>
</body>
</html>