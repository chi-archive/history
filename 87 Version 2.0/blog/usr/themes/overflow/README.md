## 鸣谢 ##

overflow主题源于开源html模板overflow，原作者依旧享有所有代码的一切权利；此外，本主题在制作过程中收到如[@橘子书][1]、[@泽泽][2]、[@图南山][3]等博友的帮助，以及采用部分开源项目，在此表示感谢！

## 特点 ##

> 简洁、大气、单栏、自适应

## 2018/7/3发布说明 ##

 1. 单栏自适应模板
 2. 采用aos页面动画库，丝滑享受，你值得拥有
 3. 首页文章缩略图，支持随机图片显示（内置24张精选图片）
 4. 卡片式友链布局
 5. 自带归档页面模板
 6. 支持代码高亮
 7. 极致简洁，享受写作的快感

## 使用文档 ##
1.**归档页面**：使用方法：管理>独立页面>新增，在自定义模板下选择“归档”，页面标题命名为：归档，页面内容空着，直接发布页面即可。

> 效果预览：[https://1000yun.cn/archives.html][4]

2.**友链页面**：需要先安装修改版Links插件（[点我下载][5]）并启用插件,使用方法：管理>独立页面>新增>，在自定义模板下选择“链接” ，页面标题命名为：友链，页面内容：`<a links=" -SHOW_MIX"></a> ` 

> 效果预览：[https://1000yun.cn/links.html][6]

3.**首页随机缩略图**：默认文件夹为主题文件夹下的img/sj文件夹，默认调用文件为1.jpg~24.jpg，若想增加更多的调用文件数，可修改functions.php的第56行代码中的`24`！
若想修改调用地址，如使用腾讯cos等，可将图片文件名修改为1.jpg、2.jpg、3.jpg..等，然后上传至cos中，将functions.php中的第61行代码修改为自己的cos地址，如：http://xxxx.cossh.myqcloud.com/,然后在后台主题设置中选择相应的选项，就会随机显示http://xxxx.cossh.myqcloud.com/n.jpg，`n`为随机数字，下限是1，上限是functions.php中第56行代码的数字。

4.**代码高亮**：
参考演示站文档

5.使用本主题需在后台的评论设置中关闭typecho自带的反垃圾评论功能，否则可能会造成无法评论的情况，建议使用反垃圾评论插件！

## 主题预览 ##

    https://1000yun.cn
    

## 声明 ##

请保留版权标识，未经允许请勿删除版权声明！







  [1]: https://loomob.com
  [2]: http://qqdie.com
  [3]: http://tunanshan.com
  [4]: https://1000yun.cn/archives.html
  [5]: https://optica-1252339383.coscd.myqcloud.com/Links.zip
  [6]: https://1000yun.cn/links.html