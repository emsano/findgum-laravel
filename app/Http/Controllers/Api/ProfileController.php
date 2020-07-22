<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\SubCategory;
use App\User;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        $con = DB::connection('mysql2');

        $data = $con
        ->table('user')
        ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
        // ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('Posting', 'posting.PostingId', 'posting.ShortDescription', 'posting.Description as Desc',
                'user.FirstName', 'user.UserId', 'user.AccountType', 'user.ImageUrl as ProfPhoto',
                'posting.FeaturedPhoto', 'cities.City',
                'posting_status.PostingStatus', 'posting.DateCreated', 'posting.UnitPrice',
                DB::raw(
                    '(SELECT ImageUrl FROM posting_images
                        WHERE posting.PostingId = posting_images.PostingId
                        LIMIT 1
                        ) as ImageUrl'
                    )
                )

        // $data = $con
        // ->table('user')
        // ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
        // ->select('posting.*')
        ->where([
            ['posting.CreatedBy', '=', $id],
        ])
        ->orderBy('posting.DateCreated', 'desc')
        ->distinct('posting.PostingId')
        ->simplePaginate(16);

        $noImg = 'assets/images/noimage.png';

        return view('profile')
        ->with(
            compact(
                'data', 'noImg'
            )
        );
    }
}
