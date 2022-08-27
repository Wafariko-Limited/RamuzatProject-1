 
  <?php 
     $logo_url = base_url('uploads/organisation_1/logo/efinanci-logo.jpg');
     $bg_cover_url = base_url('uploads/organisation_1/logo/efinanci_bg.png');
     $email_template_css= base_url('myassets/css/email-template.css');
     $neededcss_fa= base_url('myassets/font-awesome/css/font-awesome.css');
     $neededcss_bootstrap= base_url('myassets/css/bootstrap.min.css');

  echo $html_content="
<!DOCTYPE 
<html>
<head>
<link rel='stylesheet' href=".$email_template_css.">
<link rel='stylesheet' href=".$neededcss_fa.">
<link rel='stylesheet' href=".$neededcss_bootstrap.">
    <span class='preheader'>Your 360<sup>.</sup>financial partner.</span>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body'>
      <tr>
        <td>&nbsp;</td>
        <td class='container'>
          <div class='content'>

            <!-- START CENTERED WHITE CONTAINER -->
            <table role='presentation' class='main'>

              <!-- message body -->
              <tr>
                <td class='wrapper'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                     <a href='https://efinanci.com/' target='_blank'><img src=".$logo_url." class='logo' style='width:50%;float:both;margin:auto;'></a>
                       <!--<div style='border-bottom: 1.5px solid #3498db;'></div>-->
                    <tr>
                      <td><br>
                        
                        <p style='text-align:left;padding:5px;'>Password Reset</p> 
                        <p> Dear {Username},</p>

                       
                        <p>It seems you have forgotten you password and requested for a password reset ,please click the button below to reset your password.</p>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='btn'>
                        <tr>
                        <td>  <a href='https://demo.efinanci.com/' target='_blank'>Reset My Password</a></td>
                        </tr>
                        </table>
                        <p>If you did not forget your password and never requested for password reset, safely ignore this email.
                          
                        <!-- Email Signature-->
                         <p>
                          Best regards.
                        </p>
                        <p>Management</p>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0'>
                         <tr>
                        <td style='border-top:1px solid #ccc;'>
                        <div class='container'>
                        <div class='row'>
                        <div class='col-md-6'>
                        <img src=".$logo_url." class='logo'style='width:100px;'/>
                         <p><b>{organisation_name}</b></p>
                          <p>{physical_address}</p>
                         <p>{postal_address}</p>
                        </div>
                         <div class='col-md-6'>
                        <p>Contact Information.</p>
                         
                        <p>Tel. {Office_phone}</p>
                        <p>Email.{organisation_email}</p>
                        <p>Follow our updates on:</p>
                          <span class='apple-link'><i class='fa fa-whatsapp fa-1x'></i></span>
                          <span class='apple-link'><i class='fa fa-twitter fa-1x'></i></span>
                        </div>
                        </div>
                        </div>
                        </td>
                      </tr>
                     
                       </table>
                          <hr/>
                        <small>You are receiving this email because you are a member of {organisation_name}. If you are no longer interested, please reply to this email..</small>
                       
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- end of main container -->
            </table>
            <!-- end of centered div -->

           
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
  </html>
  ";?>