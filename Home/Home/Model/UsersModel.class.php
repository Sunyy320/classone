<?php
namespace Home\Model;
use \Think\Model;

   class UsersModel extends Model{


      protected $_validate = array(
         //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
          array('username','require','用户名不能为空！'), // 在新增的时候验证name字段是否唯
          array('username','','用户名已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
          array('username','/^\w{3,}$/','用户名长度必须大余3',0,'regex',1),
          array('pwd','require','密码不能为空！'),
          array('repwd','pwd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
          array('email','require','邮箱不能为空！'),
      );
   }
?>