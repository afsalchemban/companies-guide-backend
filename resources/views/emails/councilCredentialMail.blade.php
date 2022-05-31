<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  <table style="width:90%;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px #5b7ca3;">
    <thead>
      <tr>
        <th style="text-align:left;"><img style="max-width: 150px;" src="https://storage.googleapis.com/business-council-bucket/defaults/admin/logo/desktop/admin.jpeg" alt="Business Council Network"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td style="vertical-align:top">
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;">Dear <span style="font-weight:bold;font-size:13px;">{{ $mailData['name'] }}</span></p>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;">Greetings!</p>
        </td>
      </tr> 
      <tr>
        <td style="height:35px;"></td>
      </tr>
       <tr>   
         <td>
          <p style="margin:0 0 10px 0;padding:0;font-size:14px;">You have been registered as the person in charge of the account for the  <span style="font-weight:bold;font-size:13px;">{{ $mailData['council'] }}</span> within the Business Councils Network platform (bcnid.com).</p>
          
        </td>
      </tr>
      <tr>
        <td>
          <p style="margin:30px 0 10px 0;padding:0;font-size:14px;text-align:center;">Kindly find below the Login details:</p>
        </td>
      </tr>
      <tr>
        <td >
          <div style="border: solid 1px #ddd; padding:10px 20px;text-align:center;">
            <p style="font-size:14px;margin:0 0 6px 0;">Username: <span style="font-weight:bold;display:inline-block;min-width:150px">{{ $mailData['email'] }}</span></p>
            <p style="font-size:14px;margin:0 0 6px 0;">Password: <span style="font-weight:bold;display:inline-block;min-width:150px">{{ $mailData['password'] }}</span></p>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <p style="margin:30px 0 10px 0;padding:0;font-size:14px;text-align:center;">Welcome on board!</p>
        </td>
      </tr>
    </tbody>
    <tfooter>
      <tr>
        <td colspan="2" style="font-size:14px;">
          <p style="padding:0;font-size:14px;">Best Regards.</p>
          <p style="margin:0;"><span style="font-weight:bold;font-size:13px;">BCN team</span></p>
          <p style="padding:0;margin:0;font-size:14px;">bcservice@bcnid.com </p>
        </td>
      </tr>
    </tfooter>
  </table>
</body>

</html>