# 静态工厂模式

## 目的
与抽象工厂模式类似，此模式用于创建一系列相关或相互依赖的对象。 
『静态工厂模式』与『抽象工厂模式』的区别在于，只使用一个静态方法来创建所有类型对象， 
此方法通常被命名为 `factory` 或 `build`。

## UML 类图
![静态工厂模式](./StaticFactory.png)