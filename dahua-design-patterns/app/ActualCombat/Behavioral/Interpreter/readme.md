# 实现一个自定义接口告警规则功能。
- 自定义的告警规则只包含“||、&&、>、<、==”这五个运算符
- “>、<、==”运算符的优先级高于“||、&&”运算符。“&&”运算符优先级高于“||”。
- 任意元素之间需要通过空格来分隔。
- 用户可以自定义要监控的 key