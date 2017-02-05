<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $model = M('messages');
        $classify = I('post.classify');
        print_r($classify);
        $res = D('Addclassify')->addclassify($classify);
        
        /** 提交内容 */
        if (isset($_POST['submit'])) {
            $name = I('post.name');
            $content = I('post.content');

            if ($name == '' || $content == '') {
                $this->error('请输入完整内容');
            }

            $data =  [
                'name' => $name,
                'content' => $content,
                'classify' => $classify,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $model->data($data)->add();

            $this->success('留言成功');exit;
        }

        /** 获取已经留言的数据 */
        $allMessages = $model->order('created_at')->select();


        $this->assign('messages', $allMessages);

        /** 
            如果display()方法不加参数，那么系统回自动定位到当前模块目录（也就是Home）
            View/Index(当前的控制器，我这里是IndexController也就是Index)/index(当前的方法) 
        */
        $this->display();
    }

}