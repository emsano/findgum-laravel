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

class AdminController extends Controller
{

    protected $htmlBuilder;

    public function __construct(Builder $htmlBuilder) {
        $this->htmlBuilder = $htmlBuilder;
    }

    public function dashboardIndex()
    {
        $admin_dashboard_active = 'active';

        $pending_posts_active = 'active';
        $where = 'Pending Approval';

        $cdata = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('Posting', 'posting.PostingId', 'posting.ShortDescription','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated');


        $cdata = $cdata
            ->where([
                ['posting_status.StatusCode', '=', 'G'],
            ])
            ->get();

        return view('admin.dashboard', compact('admin_dashboard_active', 'where', 'cdata'));
    }

    public function postsIndex($selected)
    {
        $admin_posts_active = 'active';
        $admin_posts_show = 'show';

        $cdata = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('Posting', 'posting.PostingId', 'posting.ShortDescription','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated');

        switch ($selected) {
            case 'all':
                $all_posts_active = 'active';
                $where = 'All Posts';

                $cdata = $cdata
                    ->get();
                break;
            case 'active':
                $active_posts_active = 'active';
                $where = 'Active Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'P'],
                    ])
                    ->get();
                break;
            case 'expired':
                $expired_posts_active = 'active';
                $where = 'Expired Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'E'],
                    ])
                    ->get();
                break;
            case 'pending':
                $pending_posts_active = 'active';
                $where = 'Pending Approval';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'G'],
                    ])
                    ->get();
                break;
            case 'reported':
                $reported_posts_active = 'active';
                $where = 'Reported Posts';

                $cdata = $cdata
                    ->join('posting_reports', 'posting.PostingId', '=', 'posting_reports.PostingId')
                    ->join('user as user2', 'posting_reports.ReportedBy', '=', 'user2.UserId')
                    ->join('report_reasons', 'posting_reports.ReportReasonId', '=', 'report_reasons.ReportReasonId')
                    ->select('Posting', 'posting.PostingId', 'posting.ShortDescription','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated', 'report_reasons.Reason', 'user2.FirstName as Reporter', 'posting_reports.Message')
                    // ->where([
                    //     ['posting_status.StatusCode', '=', 'E'],
                    // ])
                    ->get();
                break;
            case 'drafts':
                $drafts_posts_active = 'active';
                $where = 'Drafts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'D'],
                    ])
                    ->get();
                break;
            case 'deleted':
                $deleted_posts_active = 'active';
                $where = 'Deleted Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'T'],
                    ])
                    ->get();
                break;
            default:

                break;
        }

        return view('admin.posts', compact('admin_posts_active',
            'admin_posts_show',
            'where',
            'all_posts_active',
            'active_posts_active',
            'expired_posts_active',
            'pending_posts_active',
            'reported_posts_active',
            'drafts_posts_active',
            'deleted_posts_active',
            'cdata'
        ));
    }


    public function categIndex(Request $request)
    {
        $admin_posting_options_active = 'active';
        $admin_posting_options_categ_active = 'active';
        $admin_posting_options_show = 'show';
        $where = 'Categories';

        $cdata = DB::connection('mysql2')
        ->table('categories')
        ->join('user', 'user.UserId', '=', 'categories.CreatedBy')
        ->select('CategoryId', 'Category','CategoryCode', 'IsCategoryActive', 'FirstName')
        ->get();

        return view('admin.posting-options', compact('admin_posting_options_active', 'admin_posting_options_categ_active', 'admin_posting_options_show', 'where' ,'cdata'));
    }


    public function subCategIndex (Request $request)
    {
        $admin_posting_options_active = 'active';
        $admin_posting_options_subcateg_active = 'active';
        $admin_posting_options_show = 'show';
        $where = 'Sub-Categories';

        $cdata = DB::connection('mysql2')
        ->table('sub_categories')
        ->join('categories', 'categories.CategoryId', '=', 'sub_categories.CategoryId')
        ->join('user', 'user.UserId', '=', 'sub_categories.CreatedBy')
        ->select('SubCategoryId', 'Category', 'Description','CategoryCode', 'IsCategoryActive', 'FirstName')
        ->get();

        return view('admin.posting-options',
            compact('admin_posting_options_active', 'admin_posting_options_subcateg_active', 'admin_posting_options_show', 'where', 'cdata')
        );
    }

    public function userMaintenanceIndex($selected)
    {
        $user_maint_active = 'active';
        $user_maint_show = 'show';

        $cdata = DB::connection('mysql2')
            ->table('user')
            ->join('role', 'role.RoleId', '=', 'user.RoleId');

        switch ($selected) {
            case 'buyerseller':
                $buyerseller_active = 'active';
                $where = 'Buyer/Seller';

                $cdata = $cdata
                    ->select('user.UserId', 'SID', 'Username', 'FirstName', 'LastName', 'EmailAddress', 'user.DateCreated', 'LastLogin', 'role.Role')
                    ->where([
                        ['Role', '=', 'Advertiser']
                        ])
                    ->orWhere([
                        ['Role', '=', 'Power User']
                    ])
                    ->get();
                break;
            case 'reported':
                $reported_active = 'active';
                $where = 'Reported';

                $cdata = $cdata
                ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
                ->join('posting_reports', 'posting_reports.PostingId', '=', 'posting.PostingId')
                ->select('user.UserId', 'SID', 'Username', 'FirstName', 'LastName', 'EmailAddress', 'user.DateCreated', 'LastLogin', 'role.Role', 'posting.PostingId', 'posting.Posting')
                ->get();
                break;
            case 'subscribers':
                $subscribers_active = 'active';
                $where = 'Subscribers';

                $cdata = $cdata
                    // ->join('subscribers', 'subscribers.EmailAddress', '=', 'user.EmailAddress')
                    ->select('user.UserId', 'SID', 'Username', 'FirstName', 'LastName', 'user.EmailAddress', 'user.DateCreated', 'LastLogin', 'role.Role')
                    ->where([
                        ['user.IsSubscribe', '=', '1'],
                    ])
                    ->get();
                break;
            case 'admin':
                $admin_active = 'active';
                $where = 'Administrators';

                $cdata = $cdata
                    ->select('user.UserId', 'SID', 'Username', 'FirstName', 'LastName', 'EmailAddress', 'user.DateCreated', 'LastLogin', 'role.Role')
                    ->where([
                        ['Role', '=', 'Admin']
                        ])
                    ->orWhere([
                        ['Role', '=', 'Power User']
                    ])
                    ->get();
                break;
            default:

                break;
        }

        return view('admin.users', compact('user_maint_show',
            'user_maint_active',
            'where',
            'buyerseller_active',
            'reported_active',
            'subscribers_active',
            'admin_active',
            'cdata'
        ));
    }

    public function viewCateg ($id)
    {
        $where = 'Category';

        $cdata = DB::connection('mysql2')
        ->table('categories')
        ->join('user', 'user.UserId', '=', 'categories.CreatedBy')
        ->select('CategoryId', 'Category as CName','CategoryCode', 'IsCategoryActive', 'FirstName', 'categories.DateCreated')
        ->where([
            ['CategoryId', '=', $id]
        ])
        ->get();

        return view('admin.view-categ')
            ->with(compact('where', 'cdata'));
    }

    public function viewSubCateg ($id)
    {
        $where = 'Sub Category';

        $cdata = DB::connection('mysql2')
        ->table('sub_categories')
        ->join('categories', 'categories.CategoryId', '=', 'sub_categories.CategoryId')
        ->join('user', 'user.UserId', '=', 'sub_categories.CreatedBy')
        ->select('SubCategoryId', 'Category', 'Description as CName','CategoryCode', 'IsCategoryActive', 'FirstName', 'categories.DateCreated')
        ->where([
            ['SubCategoryId', '=', $id]
        ])
        ->get();

        $categs = DB::connection('mysql2')
        ->table('categories')
        ->select('CategoryId', 'Category', 'CategoryCode')
        ->get();

        return view('admin.view-categ')
            ->with(compact('where', 'cdata', 'categs'));
    }

    public function getSubCategories (Request $request)
    {
        return DB::connection('mysql2')->table('categories')->select(['CategoryId', 'Category', 'CategoryCode']);
    }


    public function viewPostIndex($id)
    {
        $where = 'View Post';
        $postId = $id;

        $img = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        // ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
        // ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        // ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        // ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        // ->select('Posting', 'posting.PostingId', 'posting.ShortDescription', 'posting_images.ImageUrl','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated')
        ->select('posting_images.ImageUrl')
        ->where('posting.PostingId', '=', $id)
        ->get();

        $item = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        // ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
        ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('user.UserId', 'user.FirstName', 'Posting', 'posting.PostingId', 'posting.UnitPrice','posting.ShortDescription', 'posting.Description as PostDesc', 'user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting_status.StatusCode','posting.DateCreated')
        ->where('posting.PostingId', '=', $id)
        ->get();

        $item[0]->PostDesc = base64_encode($item[0]->PostDesc);
        $item[0]->City = base64_encode($item[0]->City);

        // $img = $img->toJson();
        // $item = $item->toJson();

        return view('admin.view-post')->with(
            compact('where', 'postId', 'img', 'item')
        );
    }


    public function getPostImages($img)
    {
        $path = public_path().'/uploads/products/'.$img;

        if (!File::exists($path)) {
            return response()->json(['message' => $path ], 404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function viewUserIndex($id) {
        $adata = DB::connection('mysql2')
            ->table('user')
            ->join('role', 'role.RoleId', '=', 'user.RoleId');

         $cdata = $adata->select('*')
            ->where([
                ['UserId', '=', $id]
            ])
            ->get();

        $userPosts = $adata
            ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
            ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
            // ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
            ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
            ->join('cities', 'posting.CityId', '=', 'cities.CityId')
            ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
            ->select('Posting', 'posting.PostingId', 'posting.ShortDescription', 'posting.Description as Desc',
                    'user.FirstName', 'user.UserId', 'user.AccountType', 'user.ImageUrl as ProfPhoto',
                    'posting.FeaturedPhoto','sub_categories.Description', 'cities.City',
                    'posting_status.PostingStatus', 'posting.DateCreated', 'posting.UnitPrice')
            ->get();

        $userPosts = json_decode(json_encode($userPosts), true);

        $userMessages = $cdata;


        return view('admin.view-user')->with(
            compact('cdata', 'userPosts')
        );
    }
}
