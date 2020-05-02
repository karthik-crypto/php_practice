<html lang="en">
  <head>
  <title>Processing Payment...</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  </head>
  <body>
    <div>
      Processing your payment, please wait...
    </div>
    <form action="{gateway_url}" method="post" name="server_request" target="_top" >
      <table width="80%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <input type="hidden" name="encrypted_request" id="encrypted_request" value="{encrypted_request}" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="merchant_id" id="merchant_id" value="{merchant_id}" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="access_token" id="access_token" value="{access_token}">
          </td>
        </tr>
      </table>
    </form>
    <script type="text/javascript">
      document.server_request.submit();
    </script>
  </body>
</html>
