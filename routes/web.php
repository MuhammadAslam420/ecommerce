<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\Mail\AddSubscribeMailComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogDetailComponent;
use App\Http\Livewire\BrandcComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CompareComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\ProductDetailComponent;
use App\Http\Livewire\PurchaseGuideComponent;
use App\Http\Livewire\SaleComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ShopGridComponent;
use App\Http\Livewire\ShopListViewComponent;
use App\Http\Livewire\ShopRightSideBarComponent;
use App\Http\Livewire\TermsConditionComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

// Admin Routes component //
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\Brand\AddBrandComponent;
use App\Http\Livewire\Admin\Brand\BrandsComponent;
use App\Http\Livewire\Admin\Brand\EditBrandComponent;
use App\Http\Livewire\Admin\Category\AddCategoryComponent;
use App\Http\Livewire\Admin\Category\CategoriesComponent;
use App\Http\Livewire\Admin\Category\EditCategoryComponent;
use App\Http\Livewire\Admin\ErrorComponent;
use App\Http\Livewire\Admin\Order\OrderDetailComponent;
use App\Http\Livewire\Admin\Order\OrdersComponent;
use App\Http\Livewire\Admin\Product\AddProductComponent;
use App\Http\Livewire\Admin\Product\EditProductComponent;
use App\Http\Livewire\Admin\Product\ProductsComponent;
use App\Http\Livewire\Admin\Product\Attribute\AddAttributeComponent;
use App\Http\Livewire\Admin\User\UserComponent;
use App\Http\Livewire\User\UserAddReviewComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\Admin\Banners\AllBannersComponent;
use App\Http\Livewire\Admin\Banners\AddBannerComponent;
use App\Http\Livewire\Admin\Banners\EditBannerComponent;
use App\Http\Livewire\Admin\Home\HomePageCategoryrComponent;
use App\Http\Livewire\Admin\Home\SaleONComponent;
use App\Http\Livewire\Admin\Home\HomePageSettingComponent;
use App\Http\Livewire\Admin\Coupon\AllCouponsComponent;
use App\Http\Livewire\Admin\Coupon\AddCouponComponent;
use App\Http\Livewire\Admin\Coupon\EditCouponComponent;
use App\Http\Livewire\Admin\Mail\EditSubscribeMailComponent;
use App\Http\Livewire\Admin\Mail\Promotion\PromotionMailComponent;
use App\Http\Livewire\Admin\Mail\SubscribeMailComponent;
use App\Http\Livewire\Admin\Messages\AllMessagesComponent;
use App\Http\Livewire\Admin\Mega\Menu\MegaMenuComponent;
use App\Http\Livewire\Admin\Order\CanceledOrderComponent;
use App\Http\Livewire\Admin\Order\DeliveredOrderComponent;
use App\Http\Livewire\Admin\Order\DispatchedOrderComponent;
use App\Http\Livewire\Admin\Order\Invoice\OrderInvoiceComponent;
use App\Http\Livewire\Admin\Order\PendingOrderComponent;
use App\Http\Livewire\Admin\Profile\AdminProfileComponent;

use App\Http\Livewire\Admin\Seo\CreateComponent as SeoCreate;
use App\Http\Livewire\Admin\Seo\EditComponent as SeoEdit;
use App\Http\Livewire\Admin\Seo\ViewComponent as SeoView;

use App\Http\Livewire\Admin\Pages\ViewComponent as PageView;
use App\Http\Livewire\Admin\Pages\CreateComponent as PageCreate;

use App\Http\Livewire\Admin\User\EditUserComponent;
//User Routes Component class //
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserOrderDetailComponent;
use App\Http\Livewire\User\UserOrdersComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",HomeComponent::class)->name("home");
Route::get("/shop",ShopComponent::class)->name("shop");
Route::get("/about",AboutComponent::class)->name("about");
Route::get("/contact",ContactComponent::class)->name("contact");
Route::get("/shop-right-grid",ShopRightSideBarComponent::class)->name('shop-right');
Route::get("/shop-grid",ShopGridComponent::class)->name("shop-grid");
Route::get("/shop-list-view",ShopListViewComponent::class)->name("shop-list");
Route::get("/product-detail/{slug}",ProductDetailComponent::class)->name("product-detail");
Route::get("/wishlist",WishlistComponent::class)->name("wishlist");
Route::get("/cart",CartComponent::class)->name("cart");
Route::get("/checkout",CheckoutComponent::class)->name("checkout");
Route::get("/compare",CompareComponent::class)->name("compare");
Route::get("/blog",BlogComponent::class)->name("blog");
Route::get("/blog-detail/{slug}",BlogDetailComponent::class)->name("blog-detail");
Route::get("/purchase-guide",PurchaseGuideComponent::class)->name("purchase-guide");
Route::get("/privacy-policy",PrivacyPolicyComponent::class)->name("privacy-policy");
Route::get("/terms-condition",TermsConditionComponent::class)->name("terms-condition");
Route::get('/thankyou',ThankyouComponent::class)->name('thankyou');
Route::get('/category/{slug}',CategoryComponent::class)->name('category');
Route::get('/search',SearchComponent::class)->name('search');
Route::get('/brand/{id}',BrandcComponent::class)->name('brand');
Route::get('/sale',SaleComponent::class)->name('sale');


Route::middleware(['auth:sanctum', 'verified', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {

        // Pages Routes
        Route::get('/page/view',PageView::class)->name('admin.page.view');
        Route::get('/page/create',PageCreate::class)->name('admin.page.create');

        // SEO routes
        Route::get('/seo/create',SeoCreate::class)->name('admin.seo.create');
        Route::get('/seo/view',SeoView::class)->name('admin.seo.view');
        Route::get('/seo/{id}/edit',SeoEdit::class)->name('admin.seo.edit');

        Route::get('/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/categories',CategoriesComponent::class)->name('admin.categories');
        Route::get('/add/category',AddCategoryComponent::class)->name('admin.add_category');
        Route::get('/edit/category/{slug}',EditCategoryComponent::class)->name('admin.edit_category');
        Route::get('/error/404',ErrorComponent::class)->name('error');
        Route::get('/brands',BrandsComponent::class)->name('admin.brands');
        Route::get('/add/new/brand',AddBrandComponent::class)->name('admin.add_brand');
        Route::get('/edit/brand/{id}',EditBrandComponent::class)->name('admin.edit_brand');
        Route::get('/products',ProductsComponent::class)->name('admin.products');
        Route::get('/add/new/product',AddProductComponent::class)->name('admin.add_product');
        Route::get('/edit/product/{id}',EditProductComponent::class)->name('admin.edit_product');

        // User Routes
        Route::get('/all/customers',UserComponent::class)->name('admin.users');
        Route::get('/user/edit/{id}',EditUserComponent::class)->name('admin.user.edit');

        // Orders Routes
        Route::get('/all/orders',OrdersComponent::class)->name('admin.orders');
        Route::get('/orders/delivered',DeliveredOrderComponent::class)->name('admin.orders.delivered');
        Route::get('/orders/dispatched',DispatchedOrderComponent::class)->name('admin.orders.dispatched');
        Route::get('/orders/pending',PendingOrderComponent::class)->name('admin.orders.pending');
        Route::get('/orders/canceled',CanceledOrderComponent::class)->name('admin.orders.canceled');

        Route::get('/detail/order/{id}',OrderDetailComponent::class)->name('admin.order_detail');
        Route::get('/admin/all/banners',AllBannersComponent::class)->name('admin.banners');
        Route::get('/add/new/banner',AddBannerComponent::class)->name('admin.add_banner');
        Route::get('/edit/banner/{id}',EditBannerComponent::class)->name('admin.edit_banner');
        Route::get('/home_page/categories',HomePageCategoryrComponent::class)->name('admin.home_page_categories');
        Route::get('/mega_menu/categories',MegaMenuComponent::class)->name('admin.mega_menu_categories');
        Route::get('/sale_on',SaleONComponent::class)->name('admin.sale');
        Route::get('/all/coupons',AllCouponsComponent::class)->name('admin.coupons');
        Route::get('/add/coupon',AddCouponComponent::class)->name('admin.add_coupon');
        Route::get('/edit/coupon/{id}',EditCouponComponent::class)->name('admin.edit_coupon');
        Route::get('/all/messages',AllMessagesComponent::class)->name('admin.messages');
        Route::get('/web/general/setting',HomePageSettingComponent::class)->name('admin.setting');
        Route::get('/add/attribute',AddAttributeComponent::class)->name('admin.add_attribute');
        Route::get('/subscribe/mail/messages',SubscribeMailComponent::class)->name('admin.subscribe_mails');
        Route::get('/add/subscribe/mail/message',AddSubscribeMailComponent::class)->name('admin.add_subscribe_mail');
        Route::get('/edit/subscribe/mail/{id}',EditSubscribeMailComponent::class)->name('admin.edit_subscribe_mail');
        Route::get('/promotion/mails',PromotionMailComponent::class)->name('admin.promotion_mails');
        Route::get('/profile/setting',AdminProfileComponent::class)->name('admin.profile_setting');
        Route::get('/order/{id}/invoice',OrderInvoiceComponent::class)->name('admin.order_invoice');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', UserDashboardComponent::class)->name('user.dashboard');
        Route::get('/edit/profile',UserEditProfileComponent::class)->name('edit.profile');
        Route::get('/change/password',UserChangePasswordComponent::class)->name('user_change.password');
        Route::get('/my/orders',UserOrdersComponent::class)->name('user.orders');
        Route::get('/order/detail/{id}',UserOrderDetailComponent::class)->name('user_order.detail');
        Route::get('/order/review/{id}/{product_id}',UserAddReviewComponent::class)->name('user_add.review');
    });
});
