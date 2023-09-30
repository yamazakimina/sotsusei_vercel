<?php

namespace App\Http\Controllers;

use App\Models\FanclubMember;
use Illuminate\Http\Request;
use App\Models\Vtuber;

class FanclubController extends Controller
{
    public function issueMembershipCard(Request $request, Vtuber $vtuber)
    {
        $fanclubData = $request->validate([
            'fanname' => 'required',
            'likes' => 'required',
            'support_comment' => 'required',
        ]);

        $userId = auth()->id();

        FanclubMember::create([
            'user_id' => $userId,
            'vtuber_id' => $vtuber->id,
            'fan_name' => $fanclubData['fan_name'],
            'likes' => $fanclubData['likes'],
            'support_comment' => $fanclubData['support_comment'],
        ]);

        return redirect()->back()->with('success', '会員証が発行されました！');
    }
}
