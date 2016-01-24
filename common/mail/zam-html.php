<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
$message = Yii::$app->mailer->compose();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <title>Template Base</title>
    
</head>
<body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
  <style id="media-query">
      /* Client-specific Styles & Reset */
      #outlook a {
          padding: 0;
      }

      /* .ExternalClass applies to Outlook.com (the artist formerly known as Hotmail) */
      .ExternalClass {
          width: 100%;
      }

          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
              line-height: 100%;
          }

      #backgroundTable {
          margin: 0;
          padding: 0;
          width: 100% !important;
          line-height: 100% !important;
      }

      /* Buttons */
      .button a {
          display: inline-block;
          text-decoration: none;
          -webkit-text-size-adjust: none;
          text-align: center;
      }

          .button a div {
              text-align: center !important;
          }

      /* Outlook First */
      body.outlook p {
          display: inline !important;
      }

      /*  Media Queries */
@media only screen and (max-width: 500px) {
  table[class="body"] img {
    height: auto !important;
    width: 100% !important; }
  table[class="body"] img.fullwidth {
    width: 100% !important; }
  table[class="body"] center {
    min-width: 0 !important; }
  table[class="body"] .container {
    width: 95% !important; }
  table[class="body"] .row {
    width: 100% !important;
    display: block !important; }
  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important; }
  table[class="body"] .columns, table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important; }
  table[class="body"] .wrapper.first .columns, table[class="body"] .wrapper.first .column {
    display: table !important; }
  table[class="body"] table.columns td, table[class="body"] table.column td, .col {
    width: 100% !important; }
  table[class="body"] table.columns td.expander {
    width: 1px !important; }
  table[class="body"] .right-text-pad, table[class="body"] .text-pad-right {
    padding-left: 10px !important; }
  table[class="body"] .left-text-pad, table[class="body"] .text-pad-left {
    padding-right: 10px !important; }
  table[class="body"] .hide-for-small, table[class="body"] .show-for-desktop {
    display: none !important; }
  table[class="body"] .show-for-small, table[class="body"] .hide-for-desktop {
    display: inherit !important; }
  .mixed-two-up .col {
    width: 100% !important; } }
 @media screen and (max-width: 500px) {
          div[class="col"] {
              width: 100% !important;
          }
      }

      @media screen and (min-width: 501px) {
          table[class="container"] {
              width: 500px !important;
          }
      }
  </style>
  <table class="body" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 100%;width: 100%;table-layout: fixed" cellpadding="0" cellspacing="0" width="100%" border="0">
      <tbody><tr style="vertical-align: top">
          <td class="center" style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;text-align: center;background-color: #FFFFFF" align="center" valign="top">
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #2C2D37" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                        <table class="block-grid two-up" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td class='' valign="top" width='250'><![endif]--><div class="col num6" style="display: inline-block;vertical-align: top;text-align: center;width: 250px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 20px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;width: 100%;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px" align="center">
            <div align="center">
                <a href="https://beefree.io" target="_blank">
                    <img class="center" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 191px;max-width: 191px" align="center" border="0" src="
                         data:image/png;base64,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
                         " alt="Image" title="Image" width="191">
                </a>

            </div>
        </td>
    </tr>
</tbody></table>
                        </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]><td class='' valign="top" width='250'><![endif]--><div class="col num6" style="display: inline-block;vertical-align: top;text-align: center;width: 250px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 20px;padding-right: 0px;padding-bottom: 20px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#555555;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">            
        	<div style="font-size:14px;line-height:17px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><br></div>
        </div>
    </td>
  </tr>
</tbody></table>
                        </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #323341" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                        <table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #000000;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td class='' valign="top" width='500'><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 500px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 10px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 10px solid transparent;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px">
        <div style="color:#ffffff;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">            
        	<div style="text-align:center;font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;"><span style="font-size:28px; line-height:34px;"><b><?= Yii::$app->name ?></b></span></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 10px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 10px solid transparent;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#E8A05D;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">            
        	<div style="font-size:14px;line-height:17px;color:#E8A05D;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><span style="font-size:16px; line-height:19px;font-family:verdana, genevapx;"><strong>Dzi&#281;kujemy za z&#322;o&#380;enie zam&#243;wienia. Postaramy si&#281; zrealizowa&#263; je jak najszybicej.</strong></span></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;width: 100%;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px" align="center">
            <div align="center">
                <a href="https://beefree.io" target="_blank">
                    <img class="center" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;margin: 0 auto;float: none;width: 402px;max-width: 402px" align="center" border="0" src="
                         data:image/png;base64,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
                         " alt="Image" title="Image" width="402">
                </a>

            </div>
        </td>
    </tr>
</tbody></table>
                        </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #61626F" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: top">
                  <td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                    <!--[if gte mso 9]>
                    <table id="outlookholder" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
                    <![endif]-->
                    <!--[if (IE)]>
                    <table width='500' align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>
                    <![endif]-->
                    <table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 500px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top" width="100%">
                        <table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 500px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><![endif]--><!--[if (gte mso 9)|(IE)]><td class='' valign="top" width='500'><![endif]--><div class="col num12" style="display: inline-block;vertical-align: top;width: 500px"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;-webkit-hyphens: auto;-moz-hyphens: auto;hyphens: auto;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent">
            </div>
        </td>
    </tr>
</tbody></table>                        </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
              
                        </td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></td></tr></tbody></table>
                    <!--[if mso]>
                    </td></tr></table>
                    <![endif]-->
                    <!--[if (IE)]>
                    </td></tr></table>
                    <![endif]-->
                  </td>
                </tr>
              </tbody></table>
          </td>
      </tr>
  </tbody></table>

</body></html>
<?php $this->endPage() ?>