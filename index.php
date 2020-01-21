<html>
    <head>
    <title>Real Time Currency Convertor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script data-ad-client="ca-pub-2500404253466217" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link rel="icon" href="Dollar.png" type="image/jpg" sizes="16x16">
    <style>
        .wrong{
        background-color:rgba(230,230,230,0.8);text-transform: uppercase;width:100%;padding:1%;border-radius:5px;color:rgb(200,0,0);text-align: center;
      }
        body{background-image:url("./curr.jpg"); background-size: auto; background-attachment:fixed;background-repeat: no-repeat;text-align:center;}
        .header{
            background-color: rgba(200,200,200,0.8);
            padding-top:40px;
            padding-bottom:40px;
            border-radius:10px;
        }
        .form-body{
            background-color:rgba(200,200,200,0.8);
            margin-left:40px;
            margin-right:40px;
            padding-bottom:20px;
            border-radius: 20px;
        }

        p{   font-size:22px; }
        input{font-size:15px; border-radius: 5px;width:90%;padding-left:10px; text-align:center;height:35px;font-size:20px;}
        .but{
            width:200px;height:35px; border-radius:5px;
            border:2px solid white;
            background-color:white;
            color:grey;
            transition: 0.4s;
        }
        .but:hover{color:grey ;
            border: 2px solid black;}
        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
            display: none;
        }
        table{width:100%;text-align:center;border-radius:10px;}
        table,th,tr,td{border-bottom:1px solid black;}
        th{text-align:center;font-size:20px;}
        td,th{
            border-bottom-color: black;
            border-bottom-width: 2px;
            background-color:rgba(250,250,250,0.8) ;
            height: 30px;
        }
    </style>
    </head>
    <body>
        <div class="header"><h1>REAL TIME CURRENCY CONVERTOR</h1></div>
        <br><br>
        <div class="row" id='result' style="text-align:center;">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <div class="form-body"><br>
            <form action="index.php" method="POST">
            <p>FROM: <input type="text" name="from" maxlength="3" autocomplete="off" placeholder="currency code"><br>
            <p>TO:<br><input type="text" name="to" maxlength="3" autocomplete="off" placeholder="currency code"></p>
            <p>VALUE: <input type="number" name="val" value=1 autocomplete="off" min="1"></p>
            <br>
            <button class="but" name="sub" type="submit">SUBMIT</button>
            </form>
            </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <br>
        <?php
        $curr=array (
            'ALL' => 'Albania Lek',
            'ARS' => 'Argentina Peso',
            'AWG' => 'Aruba Guilder',
            'AUD' => 'Australia Dollar',
            'AZN' => 'Azerbaijan New Manat',
            'BSD' => 'Bahamas Dollar',
            'BBD' => 'Barbados Dollar',
            'BDT' => 'Bangladeshi taka',
            'BZD' => 'Belize Dollar',
            'BMD' => 'Bermuda Dollar',
            'BOB' => 'Bolivia Boliviano',
            'BAM' => 'Bosnia and Herzegovina Convertible Marka',
            'BWP' => 'Botswana Pula',
            'BGN' => 'Bulgaria Lev',
            'BRL' => 'Brazil Real',
            'BND' => 'Brunei Darussalam Dollar',
            'KHR' => 'Cambodia Riel',
            'CAD' => 'Canada Dollar',
            'KYD' => 'Cayman Islands Dollar',
            'CLP' => 'Chile Peso',
            'CNY' => 'China Yuan Renminbi',
            'COP' => 'Colombia Peso',
            'CRC' => 'Costa Rica Colon',
            'HRK' => 'Croatia Kuna',
            'CZK' => 'Czech Republic Koruna',
            'DKK' => 'Denmark Krone',
            'DOP' => 'Dominican Republic Peso',
            'XCD' => 'East Caribbean Dollar',
            'EGP' => 'Egypt Pound',
            'SVC' => 'El Salvador Colon',
            'EUR' => 'Euro Member Countries',
            'FKP' => 'Falkland Islands (Malvinas) Pound',
            'FJD' => 'Fiji Dollar',
            'GIP' => 'Gibraltar Pound',
            'GTQ' => 'Guatemala Quetzal',
            'GGP' => 'Guernsey Pound',
            'GYD' => 'Guyana Dollar',
            'HNL' => 'Honduras Lempira',
            'HKD' => 'Hong Kong Dollar',
            'HUF' => 'Hungary Forint',
            'ISK' => 'Iceland Krona',
            'INR' => 'India Rupee',
            'IDR' => 'Indonesia Rupiah',
            'IMP' => 'Isle of Man Pound',
            'ILS' => 'Israel Shekel',
            'JMD' => 'Jamaica Dollar',
            'JPY' => 'Japan Yen',
            'JEP' => 'Jersey Pound',
            'KZT' => 'Kazakhstan Tenge',
            'KRW' => 'Korea Won',
            'KGS' => 'Kyrgyzstan Som',
            'LAK' => 'Laos Kip',
            'LBP' => 'Lebanon Pound',
            'LRD' => 'Liberia Dollar',
            'MKD' => 'Macedonia Denar',
            'MYR' => 'Malaysia Ringgit',
            'MUR' => 'Mauritius Rupee',
            'MXN' => 'Mexico Peso',
            'MNT' => 'Mongolia Tughrik',
            'MZN' => 'Mozambique Metical',
            'NAD' => 'Namibia Dollar',
            'NPR' => 'Nepal Rupee',
            'ANG' => 'Netherlands Antilles Guilder',
            'NZD' => 'New Zealand Dollar',
            'NIO' => 'Nicaragua Cordoba',
            'NGN' => 'Nigeria Naira',
            'NOK' => 'Norway Krone',
            'OMR' => 'Oman Rial',
            'PKR' => 'Pakistan Rupee',
            'PAB' => 'Panama Balboa',
            'PYG' => 'Paraguay Guarani',
            'PEN' => 'Peru Nuevo Sol',
            'PHP' => 'Philippines Peso',
            'PLN' => 'Poland Zloty',
            'QAR' => 'Qatar Riyal',
            'RON' => 'Romania New Leu',
            'RUB' => 'Russia Ruble',
            'SHP' => 'Saint Helena Pound',
            'SAR' => 'Saudi Arabia Riyal',
            'RSD' => 'Serbia Dinar',
            'SCR' => 'Seychelles Rupee',
            'SGD' => 'Singapore Dollar',
            'SBD' => 'Solomon Islands Dollar',
            'ZAR' => 'South Africa Rand',
            'LKR' => 'Sri Lanka Rupee',
            'SEK' => 'Sweden Krona',
            'CHF' => 'Switzerland Franc',
            'SRD' => 'Suriname Dollar',
            'TWD' => 'Taiwan New Dollar',
            'THB' => 'Thailand Baht',
            'TTD' => 'Trinidad and Tobago Dollar',
            'TRY' => 'Turkey Lira',
            'UAH' => 'Ukraine Hryvna',
            'GBP' => 'United Kingdom Pound',
            'UGX' => 'Uganda Shilling',
            'USD' => 'United States Dollar',
            'UYU' => 'Uruguay Peso',
            'UZS' => 'Uzbekistan Som',
            'VND' => 'Viet Nam Dong'
        );
        $rate=0.0;
        if(isset($_POST["sub"])){
        $frm=strtoupper($_POST["from"]);
        $to=strtoupper($_POST["to"]);
        $value=$_POST["val"];
        require 'simple_html_dom.php';
        if(array_key_exists($frm,$curr)){
            if(array_key_exists($to,$curr)){
                $url="https://transferwise.com/in/currency-converter/$frm-to-$to-rate";
                $html = file_get_html($url);
                $span=$html->find("span",17)->plaintext;
                $rate=floatval($span);
                $amt=$value*$rate;
                echo "<div class='form-body'  style='padding-top:20px;'>
                <h1>$value $frm = <b><font color='green'>$amt</font> $to</b></h1>
                </div>";
                echo "<script>
                            $('html, body').animate({
                                scrollTop: $('#result').offset().top
                            }, 2000);
                     </script>";
            }
            else{
                echo "<div class='row'><div class='col-sm-3'></div><div class='col-sm-6'><center><h3 class='wrong'>WRONG CURRENCY CODE (TO:)!</h3></center></div><div class='col-sm-3'></div></div>";
                echo "<script>
                            $('html, body').animate({
                                scrollTop: $('#result').offset().top
                            }, 2000);
                     </script>";
            }
        }
        else{
            echo "<div class='row'><div class='col-sm-3'></div><div class='col-sm-6'><center><h3 class='wrong'>WRONG CURRENCY CODE (FROM:)!</h3></center></div><div class='col-sm-3'></div></div>";
            echo "<script>
                            $('html, body').animate({
                                scrollTop: $('#result').offset().top
                            }, 2000);
                     </script>";
        }
        
    }
    echo "<br><br><div class='row'><div class='col-sm-3'></div><div class='col-sm-6'>";
    echo "<center><table><tr><th>Currency Code</th><th>Currency Name</th></tr>";
        foreach($curr as $key => $value){
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    echo "</table></center></div><div class='col-sm-3'></div></div><br><br>"
?>
<br><br>
</body>
</html>