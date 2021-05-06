<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome To Project L.E.O</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<style type="text/css">
      /* CLIENT-SPECIFIC STYLES */
			body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
			table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
			img { -ms-interpolation-mode: bicubic; }
			
			/* RESET STYLES */
			img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
			table { border-collapse: collapse !important; }
			body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
			
			/* iOS BLUE LINKS */
			a[x-apple-data-detectors] {
			    color: inherit !important;
			    text-decoration: none !important;
			    font-size: inherit !important;
			    font-family: inherit !important;
			    font-weight: inherit !important;
			    line-height: inherit !important;
			}
			
			/* GMAIL BLUE LINKS */
			u + #body a {
			    color: inherit;
			    text-decoration: none;
			    font-size: inherit;
			    font-family: inherit;
			    font-weight: inherit;
			    line-height: inherit;
			}
			
			/* SAMSUNG MAIL BLUE LINKS */
			#MessageViewBody a {
			    color: inherit;
			    text-decoration: none;
			    font-size: inherit;
			    font-family: inherit;
			    font-weight: inherit;
			    line-height: inherit;
			}

			/* Universal styles for links and stuff */
      
      /* Custom CSS to make things pretty */
      a.footer-btn {
        padding: 8px 14px;
        margin: 4px 2px;
        border-radius: 8px;
        cursor: pointer;
        color: #008CBA;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition-duration: 0.3s;
        background-color: white;
        border: 2px solid #008CBA;
      }
      .footer-btn:hover {
        background-color: #008CBA;
        color: #FFF;
      }
      .slide-label:hover {
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
        transform: translateY(-8px);
      }
      /* keyframes for the header fade in */
      .heading {
        display: block;
        font-size: 48px;
        font-weight: 300;
        letter-spacing: 18px;
        transform: translateX(-50px);
        animation-name: leftFadeIn;
        animation-duration: 3s;
      }
      .subheading {
        display: block;
        font-size: 20px;
        font-weight: 450;
        letter-spacing: 8px;
        transform: translateX(40px);
        animation-name: rightFadeIn;
        animation-duration: 3s;
      }
      
      @keyframes leftFadeIn {
        0% {
          opacity: 0;
          transform: translateX(-100px);
        }
        
        80% {
          transform: translateX(10px);
        }
        100% {
          opacity: 1;
          transform: translateX(-50px);
        }
      }
      @keyframes rightFadeIn {
        0% {
          opacity: 0;
          transform: translateX(100px);
        }
        
        80% {
          transform: translateX(-10px);
        }
        100% {
          opacity: 1;
          transform: translateX(40px);
        }
      }
			/* Responsive styles */
      /* PLEASE NOTE: I only applied the resposive stack to the three column table due to the nature of the content in my two column table*/
	    @media screen and (max-width: 600px) {
        .column {
          width: 100%;
          font-weight: bold;
          font-size: 16px;
        }
        .heading{
          font-size: 32px;
          transform: translateX(-18px);
        }
        .subheading{
          font-size: 18px;
        }
        @keyframes leftFadeIn {
        0% {
          opacity: 0;
          transform: translateX(-100px);
        }
        
        80% {
          transform: translateX(10px);
        }
        100% {
          opacity: 1;
          transform: translateX(-18px);
        }
      }
    }
		</style>
	</head>
	<body id="body" style="margin: 0 !important; padding: 0 !important;">
    <!--In Line CSS will enter content-->
    <table style="max-width:600px;margin-left:auto;margin-right:auto;">
      <tr>
        <!-- Logo image -->
        <td><a href="https://www.project-leo.dev/" style="cursor:pointer;"><img title="Project LEO Site" style="height:auto;width:100%;border-radius:4px;margin-top:32px;margin-bottom:32px;box-shadow:-6px 12px 10px #888888" src="https://cdn.glitch.com/f01bcd60-b609-4a96-b981-33d6ac970e4d%2Femail-hero.jpg?v=1614196433237" alt="Project LEO Hero"></a></td>
      </tr>   
      <tr>
        <!-- Headline -->
        <td style="text-align:center;padding-bottom:32px;">
          <span class="heading">Welcome</span><br>
          <span class="subheading">To Project L.E.O!</span>
        </td>
      </tr>
      <!-- Body copy -->
      <tr>
        <td style="font-size:16px;font-weight:bold;">Heya, {{$email_data['name']}}!</td>
      </tr>
      <tr>
        <td><p>Thanks for signing up! Please click on the link below to verify your account and happy coding! \(^0^)/ </p></td>
      </tr>
      <tr style="text-align:center;margin-bottom:16px;padding:16px;">
        <td>
          <a href="https://www.project-leo.dev/verify?code={{$email_data['verification_code']}}" target="_blank" class="footer-btn">Verify My Account</a>
        </td>
      </tr>
      <tr>
        <td><hr></td>
      </tr>
      <tr>
        <td style="color:white;font-size:24px;background-image:url(https://tinyurl.com/3bbkfaqr);background-color:#124f87;padding:60px 25px;"><strong>- Dev Team</strong></td>
      </tr>
      <tr>
        <td><hr></td>
      </tr>
      <!-- Footer information: Always include an unsubscribe link! -->
      <tr style="text-align: center;margin-bottom: 8px; padding: 8px;background-color:#f5f5f5">
        <td><p style="font-size:10px">Some footer message here idk what to put yolo swaggy 2021 lol xD but seriously we should add some type of footer message about legal shit and all that annoying jargon!</p></td>
      </tr>
    </table>
	</body>
</html>