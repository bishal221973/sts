<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function org(Request $request)
    {
        if ($request->org_short_name) {
            settings()->set("org_short_name", $request->org_short_name);
        }

        if ($request->org_full_name) {
            settings()->set("org_full_name", $request->org_full_name);
        }

        if ($request->org_email) {
            settings()->set("org_email", $request->org_email);
        }

        if ($request->org_contact) {
            settings()->set("org_contact", $request->org_contact);
        }

        if ($request->org_address) {
            settings()->set("org_address", $request->org_address);
        }
        if ($request->sn_number) {
            settings()->set("sn_number", $request->sn_number);
        }
        if ($request->org_vat_number) {
            settings()->set("org_vat_number", $request->org_vat_number);
        }

        if ($request->hasfile('logo')) {
            if (settings()->get('logo')) {
                Storage::delete(settings()->get('logo'));
            }

            $data['logo'] = $request->file('logo')->store();
            settings()->set("logo", $data['logo']);
        }

        return redirect()->back()->with("success", "Setting Changed");
    }
}
