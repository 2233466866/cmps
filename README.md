## Typecho一键端使用教程

1. 安装docker

1. 安装docker-composer

1. 下载一键端
   ```
   git clone https://github.com/2233466866/cmps.git
   ```

1. 修改端口号
   ```
   # 容器默认映射到宿主机8888端口和444端口
   # 如果想运行在80端口和443端口，请修改docker-compose.yml
   ```

1. 使用一键端
   ```
   cd cmps
   docker-compose up -d
   ```

1. 内容管理
   ```
   # 用户侧URL
   http://[宿主机ip]:8888
   
   # 系统后台URL
   http://[宿主机ip]:8888/admin/
   
   # 系统后台账号密码
   admin Aa12345
   ```

1. 注意事项
   ```
   不要忘了修改系统后台管理员密码
   不要忘了修改MySQL账号密码以及访问权限
   ```

