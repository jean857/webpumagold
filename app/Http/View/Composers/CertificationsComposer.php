<?php


namespace App\Http\View\Composers;


use App\Models\Certification;
use App\Models\Place;
use Illuminate\View\View;

class CertificationsComposer
{
    public function compose(View $view)
    {
        $certifications = Certification::orderBy('id', 'asc')->get(['name','description','image_source']);
        $view->with(['certifications' => $certifications]);
    }
}
