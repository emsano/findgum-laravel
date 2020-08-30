<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use App\User;
use Carbon;
// use Datatables;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\SubCategory;

class PostingController extends Controller
{
    public function index ($id) {
        //temporary connection call to 2nd DB
        $con = DB::connection('mysql2');

        $data = $con->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('Posting', 'posting.PostingId', 'posting.Description as PostDesc', 'posting.UnitPrice',
        'user.FirstName', 'user.LastName','user.UserId', 'sub_categories.Description', 'user.DateCreated as UserCreated',
        'user.AccountType', 'user.ImageUrl as ProfPhoto', 'user.ContactNo',
        'cities.City',
        'posting_status.PostingStatus', 'posting.DateCreated', 'posting.PostingKey')
        ->where([
            ['posting.PostingId', '=', $id]
        ])
        ->get();

        $img = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
        ->select('posting_images.ImageUrl')
        ->where('posting.PostingId', '=', $id)
        ->get();

        $noImg = 'assets/images/noimage.png';

        $relatedPosts = $con
            ->table('user')
            ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
            // ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
            // ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
            // ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
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
            ->where([
                ['posting.StatusCode', '=', 'P'],
                ['posting.DateCreated', '>=', Carbon::now()->subMonth(12)]
            ])
            ->orderBy('DateCreated', 'desc')
            ->distinct('posting.PostingId')
            ->simplePaginate(24);

        return view('single-post')
        ->with(
            compact(
                'data', 'img', 'noImg', 'relatedPosts'
            )
        );
    }
}
