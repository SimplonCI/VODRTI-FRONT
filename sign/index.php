<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login </title>
        
        <!-- The stylesheets -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    
    <body>
		<h1>Connectez vous avec Facebook ou Google</h1>
        <div id="main">
			
			
					<?php
					session_start();
					/******Importing Facebook API Files**************/
					require_once 'src/Facebook/autoload.php';
					require_once 'credentials.php';
					/******Facebook API Connection With My APP**************/
					$fb = new Facebook\Facebook([
					'app_id' => $appid,
					'app_secret' => $appsecret,
					'default_graph_version' => 'v2.2',
					]);

					/******Initializing The Login**************/
					$helper = $fb->getRedirectLoginHelper();
					$permissions = ['email', 'user_likes']; // optional
					$loginUrl = $helper->getLoginUrl($incommingurl, $permissions);

					/******Printing The Login URL**************/
					echo'<a href="' . $loginUrl . '" class="facebookLoginButton" title="Login With Facebook">Sign in with Facebook</a>';
					?>

					<?php
					/******Importing Google API Files**************/
					require_once 'includes/google-api-php-client/apiClient.php';
					require_once 'includes/google-api-php-client/contrib/apiOauth2Service.php';
					
					/******Google API Connection With My APP**************/
					$client = new apiClient();
					//$client->setApplicationName("TheASP");
					$client->setClientId($client_id);
					$client->setClientSecret($client_secret);
					$client->setRedirectUri($redirect_url);
					$client->setApprovalPrompt(false);
					$oauth2 = new apiOauth2Service($client);
					?>	
					<!--******Printing The Login URL*************-->
            		<a href="<?php echo $client->createAuthUrl()?>" class="googleLoginButton" title="Login With Google">Sign in with Google</a>
            		
            		</div>

    </body>
</html>