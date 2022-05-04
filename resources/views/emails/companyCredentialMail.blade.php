<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
    <thead>
      <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="" alt="Business Council Network"></th>
        <th style="text-align:right;font-weight:400;">{{ $mailData['date'] }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td style="padding:20px;vertical-align:top">
        <p style="margin:0 0 10px 0;padding:0;font-size:14px;">Hi <span style="display:block;font-weight:bold;font-size:13px;">{{ $mailData['name'] }}</span></p>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;">You have been registered as a company in Business Council Network </p>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span style="display:block;font-weight:bold;font-size:13px;">Please find the the login details below.</span></p>
        </td>
      </tr>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="border: solid 1px #ddd; padding:10px 20px;">
          <p style="font-size:14px;margin:0 0 6px 0;">Username: <span style="font-weight:bold;display:inline-block;min-width:150px">{{ $mailData['email'] }}</span></p>
          <p style="font-size:14px;margin:0 0 6px 0;">Password: <span style="font-weight:bold;display:inline-block;min-width:150px">{{ $mailData['password'] }}</span></p>
        </td>
      </tr>
    </tbody>
    <tfooter>
      <tr>
        <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
          <strong style="display:block;margin:0 0 10px 0;">Regards</strong> Business Council Network<br> 54 Al Maktoum Rd - Deira - Riggat Al Buteen - Dubai<br><br>
          <b>Phone:</b> 123232323<br>
          <b>Email:</b> smartid@business.in
        </td>
      </tr>
    </tfooter>
  </table>
</body>

</html>