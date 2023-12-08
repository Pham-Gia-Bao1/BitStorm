<?php
include_once("../Model/Blog.php");
include_once("../Model/Account.php");
class BlogController
{
    public function showProductsAndPodcasts()
    {
        $productModel = new Blog();
        $data['products'] = $productModel->getProducts();
        $data['podcasts'] = $productModel->getPodcast();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['opption'])) {
                $option = htmlspecialchars($_GET['opption']);

                switch ($option) {
                    case 'DONG_LUC':
                        $data['products'] = $productModel->get_video_type_dong_luc();
                        break;
                    case 'TINH_YEU':
                        $data['products'] = $productModel->get_video_type_tinh_yeu();
                        break;
                    case 'GIA_DINH':
                        $data['products'] = $productModel->get_video_type_gia_dinh();
                        break;
                    case 'THIEN_NHIEN':
                        $data['products'] = $productModel->get_video_type_thien_nhien();
                        break;
                    default:
                        $data['products'] = [];
                        break;
                }
            }
            // Kiểm tra nếu có giá trị tìm kiếm
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $searchTerm = htmlspecialchars($_GET['search']);
                $data['products'] = $productModel->find($searchTerm);
            }
        }
        include("../View/Blog/Blog.php");
    }
}
$controller = new BlogController();
$controller->showProductsAndPodcasts();