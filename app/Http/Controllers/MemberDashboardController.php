<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberDashboardController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Dashboard";
        return view ("member.dashboard");
    }

    //popups
    public function peso_wall_add()
    {
    	$data["page"] = "Peso Wallet Address";
    	return view ("member.popups.peso_walletaddress", $data);
    }

    public function aba_wall_add()
    {
    	$data["page"] = "Aba Wallet Address";
    	return view ("member.popups.aba_walletaddress", $data);
    }

    public function btc_wall_add()
    {
    	$data["page"] = "Btc Wallet Address";
    	return view ("member.popups.btc_walletaddress", $data);
    }

    // public function aba_to_btc_conv()
    // {
    // 	$data["page"] = "Aba to Btc Conversion";
    // 	return view ("member.popups.aba_to_btc_conv", $data);
    // }

    //  public function aba_to_peso_conv()
    // {
    //     $data["page"] = "Aba to Peso Conversion";
    //     return view ("member.popups.aba_to_peso_conv", $data);
    // }

    // public function btc_to_aba_conv()
    // {
    //     $data["page"] = "Btc to Aba Conversion";
    //     return view ("member.popups.btc_to_aba_conv", $data);
    // }

    // public function btc_to_php_conv()
    // {
    //     $data["page"] = "Btc to Peso Conversion";
    //     return view ("member.popups.btc_to_php_conv", $data);
    // }

    // public function peso_to_aba_conv()
    // {
    //     $data["page"] = "Peso to Aba Conversion";
    //     return view ("member.popups.peso_to_aba_conv", $data);
    // }

    // public function peso_to_btc_conv()
    // {
    //     $data["page"] = "Peso to Btc Conversion";
    //     return view ("member.popups.peso_to_btc_conv", $data);
    // }

    public function send_money_step_1()
    {
        $data["page"] = "Send Money Step 1";
        return view ("member.popups.send_money_step_1", $data);
    }

    public function send_money_step_2()
    {
        $data["page"] = "Send Money Step 2";
        return view ("member.popups.send_money_step_2", $data);
    }

    public function send_money_step_3()
    {
        $data["page"] = "Send Money Step 3";
        return view ("member.popups.send_money_step_3", $data);
    }

    public function cashin_mark_as_paid()
    {
        $data["page"] = "Send Money Step 3";
        return view ("member.popups.cashin_mark_as_paid", $data);
    }

    public function cashout_complete_payment()
    {
        $data["page"] = "Cash Out Complete Payment";
        return view ("member.popups.cashout_complete_payment", $data);
    }

    public function conversion_history()
    {
        $data["page"] = "Conversion History";
        return view ("member.popups.conversion_history", $data);
    }

    public function sending_transactions()
    {
        $data["page"] = "Sending Transactions";
        return view ("member.popups.sending_transactions", $data);
    }

    public function receiving_transactions()
    {
        $data["page"] = "Receiving Transactions";
        return view ("member.popups.receiving_transactions", $data);
    }

    public function cashin_history()
    {
        $data["page"] = "Cash Out History";
        return view ("member.popups.cashin_history", $data);
    }
    
    public function cashout_history()
    {
        $data["page"] = "Cash Out History";
        return view ("member.popups.cashout_history", $data);
    }

    public function wallet_conversion()
    {
        $data["page"] = "Wallet Conversion";
        return view ("member.popups.wallet_conversion", $data);
    }

    public function conversion_success()
    {
        $data["page"] = "Conversion Success";
        return view ("member.popups.conversion_success", $data);
    }
}

