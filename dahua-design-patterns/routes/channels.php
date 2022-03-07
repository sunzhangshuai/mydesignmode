<?php

/*
 * 设计模式
 *
 * author 张帅
 */

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
