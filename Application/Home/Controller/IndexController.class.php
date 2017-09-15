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
            // $result = ['status' => '1'];
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('Addclassify')->addclass($res);
        return  show(1,'删除成功');
    }
    /*删除数据 msg*/
    public function delMsg(){
        $res = $_POST['id'];
        $tabName = 'messages';
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('DeleteMessage')->delete($res,$tabName);
        return  show(1,'删除成功');
    }
    // 删除分类 classify
    public function deleteClassify() {
        $res = $_POST['id'];
		$tabName = 'classify';
        if( $res == ""){
            return show(0,'删除失败');
        }
        D('DeleteMessage')->delete($res,$tabName);
        return show(1,'删除成功');
    }
    // 获取所有msg数据
    public function getAllMsg() {
        $model = M('messages');
        $res = $_POST['classify'];
        $result = ['status' => '1'];
        if( $res == ""){
            return show(0,'删除失败');
        }
        $allMessages = $model->order('created_at')->select();
        return  show(1,'成功',$allMessages);
    }
    // 获取所有classify数据
    public function getClassify() {
        $res = $_POST['classify'];
        $classify = M('classify');
        /*获取已经添加的分类*/
        $allclassify = $classify->select();
        return show(1, 'success', $allclassify);
    }
    // 添加msgs数据
    public function addMsg() {
        $model = M('messages');
        $name = $_POST['name'];
        $content = $_POST['content'];
        $classify = $_POST['classify'];
        $data =  [
            'name' => $name,
            'content' => $content,
            'classify' => $classify,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $model->data($data)->add();
        return show(1, 'success', $data);
    }
    /*
    * user
    */
    // user注册
    public function register() {
        $model = M('users');
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $data = [
            'username' => $name,
            'password' => $password,
            'email' => $email
        ];
        if($name && $password && $email) {
            $model->data($data)->add();
            return show(1, 'success', $data);         
        }else {
            return show(0, '信息不完整', $data);
        }
    }
    // user登录
    public function login() {
        $model = M('users');
        $name = $_POST['name'];
        $password = $_POST['password'];
        $map['username'] = $name;
        $data = $model->where($map)->getField('password');
        if($data == $password) {
            return show(1,'success', $data);
        } else {
            return show(0, '账号密码不对',$data);
        }
    }
}