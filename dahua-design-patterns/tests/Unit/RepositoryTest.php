<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\OtherPatterns\Repository\Post;
use App\OtherPatterns\Repository\MemoryStorage;
use App\OtherPatterns\Repository\PostRepository;

/**
 * RepositoryTest : 资源库模式测试类.
 *
 * @category RepositoryTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class RepositoryTest extends TestCase
{
    /**
     * @group repository
     *
     * @return void
     */
    public function testExample()
    {
        $repository = new PostRepository(new MemoryStorage());
        $post = new Post();
        $post->author = 'zhangshuai';
        $post->created = '2019-9-10';
        $post->text = '吃饭';
        $post->title = '睡觉';

        $post = $repository->save($post);

        $this->assertEquals(1, $post->id);
        $this->assertEquals($post->author, $repository->getById(1)->author);
    }
}
