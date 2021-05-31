<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * Desc:
 * User: xujindong
 * Date: 2020/3/13
 * Time: 16:23
 */

namespace Jdmm\VhubCloudService\Protocol;

/**
 * Interface FileInterface
 * @package Jdmm\VhubCloudService\Protocol
 */
interface FileInterface
{
    /**
     * 根据条件查询文件详情
     * @param $where
     * @param $field
     * @return array
     */
    public function detailByWhere($where, $field = '*'): array;

    /**
     * 根据条件查询列表
     * @param array $where
     * @param string $fields
     * @param array $page
     * @param array $groupWhere
     * @param array $sort
     * @return array
     */
    public function getListPage($where = [], string $fields = '*', $page = [], $groupWhere = [], $sort = []): array;

    /**
     * 新增并返回id
     * @param $data
     * @return mixed
     */
    public function add($data);

    /**
     * 更新文件信息
     * @param $where
     * @param $data
     * @return mixed
     */
    public function update($where, $data);

    /**
     * 根据条件查询已使用容量
     * @param $user_id
     * @return array
     */
    public function sizeSumByUser($user_id);

    /**
     * 设备端文件列表
     * @param $where
     * @param $field
     * @param int $cursor
     * @param int $limit
     * @param string $sort_column
     * @param string $sort
     * @return mixed
     */
    public function fileListByCursor($where, $field, $cursor = 1, $limit = 10, $sort_column = 'id', $sort = 'desc');

    /**
     * 创建共享文件夹
     * @param $folder_name
     * @param $share_num
     * @param $share_expire
     * @param $user_id
     * @return array
     */
    public function shareFolderCreate($folder_name, $share_num, $share_expire, $user_id) :array;

    /**
     * 查看共享文件夹链接
     * @param $file_id
     * @return array
     */
    public function shareFolderUrl($file_id);

    /**
     * 参与共享文件夹
     * @param $share_folder_no
     * @param $user_id
     * @return array
     */
    public function shareFolderJoin($share_folder_no, $user_id);

    /**
     * 创建文件分享链接
     * @param $file_ids
     * @param $user_id
     * @return array
     */
    public function shareFileCreate($file_ids, $user_id);

    /**
     * 根据分享标识查询分享文件列表
     * @param $share_task_no
     * @return mixed
     */
    public function shareFileList($share_task_no);

    /**
     * 转存分享文件
     * @param $file_ids
     * @param $user_id
     * @return array
     */
    public function shareFileSave($file_ids, $user_id);

    /**
     * 转存分享临时文件
     * @param $file_ids
     * @param $user_tel
     * @param $share_task_no
     * @return array
     */
    public function shareFileTmpSave($file_ids, $user_tel, $share_task_no);

    /**
     * 根据用户手机号查询用户临时转存记录
     * @param $user_tel
     * @param $field
     * @return mixed
     */
    public function shareFileTmpList($user_tel, $field = '*');

    /**
     * 临时转存文件初始化转存
     * @param $files
     * @param $user_id
     * @param $tmp_id
     * @return array
     */
    public function shareTmpInit($files, $user_id, $tmp_id);

    /**
     * 取消共享文件夹-数据库文件位置调整为对应用户根目录
     * @param $file_list
     * @return array
     */
    public function shareFolderCancel($file_list);

    /**
     * 查询共享文件夹设置信息
     * @param $where
     * @param $field
     * @return array
     */
    public function shareFolderInfo($where, $field = '*');

    /**
     * 查询uuid绑定信息
     * @param $where
     * @param string $field
     * @return array
     */
    public function uuidInfo($where, $field = '*');

    /**
     * 创建用户与uuid的关联
     * @param $data
     * @return mixed
     */
    public function addUuid($data);
}
