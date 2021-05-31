<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Jdmm\VhubCloudService\Protocol;

/**
 * Interface UserInterface
 * @package App\Rpc\Lib
 */
interface UserInterface
{
    /**
     * 新增用户
     * @param array $data 用户数据
     * @return array
     * @author
     */
    public function addUser(array $data): array ;

    /**
     * 获取单条信息
     * @param array $map 查询条件
     * @param string $field "id,name"
     * @return array
     * @author ffx
     */
    public function userInfo(array $map, string $field = '*'): array;


    /**
     * 新增用户空间
     * @param array $data 数据
     * @return array
     * @author
     */
    public function addUserSpace(array $data): array;

    /**
     * 获取用户拥有的总空间
     * @param int $userId 用户id
     * @return int
     * @author ffx
     */
    public function userSpace(int $userId): int ;

    /**
     * 编辑用户
     * @param array $where
     * @param array $set
     * @return int
     * @author ffx
     */
    public function updateUser(array $where, array $set): int ;

}
