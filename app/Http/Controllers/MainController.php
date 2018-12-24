<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use TCG\Voyager\Models\Page;
use App\Client;

class MainController extends Controller
{
    public function getIndex()
    {

        echo view('index');
    }

    public function spets($page)
    {
        $material = Page::where('slug', '=', $page)->get();

        return view('spets')->with('material', $material);
    }


    public function forma(Request $request)
    {

        if ($request->isMethod('post')) {


            $input = $request->except('_token', 'photo', 'file'); //'file'


            $massages = [

                'required' => 'Поле :attribute обязательно к заполнению',
                'unique' => 'Поле :attribute должно быть уникальным'

            ];


            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'surname' => 'required|max:255',
                'countryviza' => 'required|max:255',
                'photo.*' => 'required'

            ], $massages);

            if ($validator->fails()) {
                return redirect()->route('forma')->withErrors($validator)->withInput();
            }

            $surname = $input['name'];
            $fotki = $request->file('photo.*');
            // $failiki = $request->file('file.*');


            $ii = 1; //$ifile=1;
            foreach ($request->file('photo.*') as $key => $file) {

                $ii++;
                $origname = $file->getClientOriginalName();
                $key = "clients/";
                $file->move(public_path() . '/storage/clients', "$surname$origname");
                $photoname = $key . $surname . $origname;
                $input += ['photo' . $ii => $photoname];
            }

            /* foreach ($request->file('file.*') as $key => $files) {

                 $ifile++;
                 $orignames = $files->getClientOriginalName();
                 $keys = "clients/";
                 $files->move(public_path().'/storage/clients',"$surname$orignames");
                 $filename = $keys.$surname.$orignames;
                 $input += ['file'.$ifile=>$filename];



             }*/


            //dd ($input);
            $page = new Client();


            $page->unguard();

            $page->fill($input);

            if ($page->save()) {
                return redirect('forma')->with('status', 'Информация добавлена');
            }

        }


        if (view()->exists('forma')) {


            return view('forma');

        }

        abort(404);


    }
}


