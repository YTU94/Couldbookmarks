<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $model = M('messages');
        $classify = M('classify');
        /*获取已经添加的分类*/
        $allclassify = $classify->select();

        $this->assign('classifys',$allclassify);
        /** 提交内容 */
        if (isset($_POST['submit'])) {
            $name = I('post.name');
            $content = I('post.content');
            $classify = I('post.sclassify');
            
            if ($name == '' || $content == '') {
                $this->error('请输入完整内容',1);
            }

            $data =  [
                'name' => $name,
                'content' => $content,
                'classify' => $classify,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $model->data($data)->add();

            $this->success('添加成功');exit;
        }

        /** 获取已经留言的数据 */
        $allMessages = $model->order('created_at')->select();


        $this->assign('messages', $allMessages);

        /** 
            如果display()方法不加参数，那么系统回自动定位到当前模块目录（也就是Home）
            View/Index(当前的控制器，我这里是IndexController也就是Index)/index(当前的方法) 
        */
        $this->display();
        print_r($res);exit;
    }

    /*验证分类数据 添加分类*/
    public  function check(){
        $res = $_POST['classify'];
        $result = ['status' => '1'];
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('Addclassify')->addclass($res);
        return  show(1,'删除成功');
    }
    /*删除数据*/
    public function delMsg(){
        $res = $_POST['id'];
        $tabName = 'messages';
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('DeleteMessage')->delete($res,$tabName);
        return  show(1,'删除成功');
    }


}