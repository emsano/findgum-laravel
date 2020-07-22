<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use App\User;

// use Datatables;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\SubCategory;

class PostingController extends Controller
{
    public function index ($id) {
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

        return view('single-post')
        ->with(
            compact(
                'data', 'img', 'noImg'
            )
        );
    }
}
