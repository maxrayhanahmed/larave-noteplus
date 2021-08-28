<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*
       * Dashboard Pages Routes
       */
    public function index(Request $request)
    {
        return view('preview.dashboards.dashboard1');
    }


    public function Newnotes(Request $request)
    {
        return view('preview.dashboards.newNotes');
    }




    public function Bin(Request $request)
    {

        return view('preview.dashboards.bin');
    }

    public function Reminder(Request $request)
    {
        return view('preview.dashboards.reminder');
    }


    public function ProjectPlans(Request $request)
    {
        return view('preview.dashboards.notebooks.projectPlans');
    }

    public function ProjectRoutine(Request $request)
    {
        return view('preview.dashboards.notebooks.routineNotes');
    }

    public function Planning(Request $request)
    {
        return view('preview.dashboards.notebooks.planning');
    }

    /*
     * Auth pages Routes
     *
     */

    function authRecoverPassword()
    {
        return view('preview.auth.forgot-password');
    }

    function authConfirmEmail()
    {
        return view('preview.auth.verify-email');
    }

    /*
     * UI Page Routes
     */

    public function UiGrid()
    {
        return view('preview.extrapages.ui.grid');
    }

    public function UiTabs()
    {
        return view('preview.extrapages.ui.tabs');
    }

    public function UiCards()
    {
        return view('preview.extrapages.ui.cards');
    }

    public function UiModal()
    {
        return view('preview.extrapages.ui.modal');
    }

    public function UiAlerts()
    {
        return view('preview.extrapages.ui.alerts');
    }

    public function UiBadges()
    {
        return view('preview.extrapages.ui.badges');
    }

    public function UiColors()
    {
        return view('preview.extrapages.ui.colors');
    }

    public function UiImages()
    {
        return view('preview.extrapages.ui.images');
    }

    public function UiAvatars()
    {
        return view('preview.extrapages.ui.avatars');
    }

    public function UiButtons()
    {
        return view('preview.extrapages.ui.buttons');
    }

    public function UiCarousel()
    {
        return view('preview.extrapages.ui.carousel');
    }

    public function UiPopovers()
    {
        return view('preview.extrapages.ui.popovers');
    }

    public function UiTooltips()
    {
        return view('preview.extrapages.ui.tooltips');
    }

    public function UiBoxshadows()
    {
        return view('preview.extrapages.ui.boxshadows');
    }

    public function UiBreadcrumb()
    {
        return view('preview.extrapages.ui.breadcrumb');
    }

    public function UiListgroup()
    {
        return view('preview.extrapages.ui.listgroup');
    }

    public function UiPagination()
    {
        return view('preview.extrapages.ui.pagination');
    }

    public function UiTypography()
    {
        return view('preview.extrapages.ui.typography');
    }

    public function UiMedia()
    {
        return view('preview.extrapages.ui.media');
    }

    public function UiProgressbars()
    {
        return view('preview.extrapages.ui.progressbars');
    }

    public function UiButtongroup()
    {
        return view('preview.extrapages.ui.buttongroup');
    }
    public function UiNotification()
    {
        return view('preview.extrapages.ui.notification');
    }

    public function UiVideo()
    {
        return view('preview.extrapages.ui.video');
    }

    public function UiHelperClass()
    {
        return view('preview.extrapages.ui.helperclass');
    }

    /*
    * App UserPage Routes
    */

    public function Userprofile()
    {
        return view('preview.app.userdetail.userprofile');
    }

    public function Useradd()
    {
        return view('preview.app.userdetail.useradd');
    }

    public function Userlist()
    {
        return view('preview.app.userdetail.userlist');
    }

    public function userprofileEdit()
    {
        return view('preview.app.userdetail.userprofileedit');
    }

    public function useraccountSettings()
    {
        return view('preview.app.userdetail.accountsetting');
    }

    public function userprivacySettings()
    {
        return view('preview.app.userdetail.privacysetting');
    }

    /*
     * Error Page Routes
     */

    public function Error404()
    {
        return view('preview.extrapages.pageError.error404');
    }

    public function Error500()
    {
        return view('preview.extrapages.pageError.error500');
    }

    /*
     * Extra Pages Routes
     */


    public function ExtrapagesBlankpage()
    {
        return view('preview.extrapages.blankpage');
    }

    public function ExtrapagesMaintenance()
    {
        return view('preview.extrapages.maintenance');
    }

    /*
     * Pricing Page Routes
    */
    public function Pricing1()
    {
        return view('preview.extrapages.pricing.pricing1');
    }

    public function Pricing2()
    {
        return view('preview.extrapages.pricing.pricing2');
    }

    /*
     * Timeline Page Routes
     */

    public function timeline1()
    {
        return view('preview.timeline.timeline1');
    }

    public function timeline2()
    {
        return view('preview.timeline.timeline2');
    }
}
