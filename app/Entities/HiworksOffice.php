<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="basic_info")
 */
class HiworksOffice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $no;
    /**
     * @ORM\Column(type="string")
     */
    private $domain;
    /**
     * @ORM\Column(type="integer")
     */
    private $group_id;
    /**
     * @ORM\Column(type="string")
     */
    private $service_item;
    /**
     * @ORM\Column(type="string")
     */
    private $service_type;
    /**
     * @ORM\Column(type="string")
     */
    private $std_mail_size;
    /**
     * @ORM\Column(type="string")
     */
    private $total_mail_size;
    /**
     * @ORM\Column(type="string")
     */
    private $total_web_size;
    /**
     * @ORM\Column(type="string")
     */
    private $default_filebox_size;
    /**
     * @ORM\Column(type="string")
     */
    private $add_filebox_size;
    /**
     * @ORM\Column(type="integer")
     */
    private $sms_id;
    /**
     * @ORM\Column(type="string")
     */
    private $startdate;
    /**
     * @ORM\Column(type="string")
     */
    private $updatedate;
    /**
     * @ORM\Column(type="string")
     */
    private $active;
    /**
     * @ORM\Column(type="string")
     */
    private $use_pop3;
    /**
     * @ORM\Column(type="string")
     */
    private $use_smtp;
    /**
     * @ORM\Column(type="string")
     */
    private $db_ip;
    /**
     * @ORM\Column(type="string")
     */
    private $db_partitioning;
    /**
     * @ORM\Column(type="string")
     */
    private $mail_partitioning;
    /**
     * @ORM\Column(type="string")
     */
    private $mail_ip;
    /**
     * @ORM\Column(type="string")
     */
    private $web_ip;
    /**
     * @ORM\Column(type="string")
     */
    private $mail_use_flag;
    /**
     * @ORM\Column(type="string")
     */
    private $webhard_use_flag;
    /**
     * @ORM\Column(type="string")
     */
    private $iframe_flag;
    /**
     * @ORM\Column(type="string")
     */
    private $max_user_cnt;
    /**
     * @ORM\Column(type="string")
     */
    private $office_user_cnt;
    /**
     * @ORM\Column(type="boolean")
     */
    private $is_managed;
    /**
     * @ORM\Column(type="boolean")
     */
    private $is_archive;
    /**
     * @ORM\Column(type="string")
     */
    private $use_subdomain;
    /**
     * @ORM\Column(type="string")
     */
    private $kid_share_flag;
    /**
     * @ORM\Column(type="string")
     */
    private $std_price;
    /**
     * @ORM\Column(type="string")
     */
    private $board_migration_flag;
    /**
     * @ORM\Column(type="string")
     */
    private $inside_mail_flag;

    /**
     * @return mixed
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * @param mixed $no
     */
    public function setNo($no): void
    {
        $this->no = $no;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     */
    public function setGroupId($group_id): void
    {
        $this->group_id = $group_id;
    }

    /**
     * @return mixed
     */
    public function getServiceItem()
    {
        return $this->service_item;
    }

    /**
     * @param mixed $service_item
     */
    public function setServiceItem($service_item): void
    {
        $this->service_item = $service_item;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->service_type;
    }

    /**
     * @param mixed $service_type
     */
    public function setServiceType($service_type): void
    {
        $this->service_type = $service_type;
    }

    /**
     * @return mixed
     */
    public function getStdMailSize()
    {
        return $this->std_mail_size;
    }

    /**
     * @param mixed $std_mail_size
     */
    public function setStdMailSize($std_mail_size): void
    {
        $this->std_mail_size = $std_mail_size;
    }

    /**
     * @return mixed
     */
    public function getTotalMailSize()
    {
        return $this->total_mail_size;
    }

    /**
     * @param mixed $total_mail_size
     */
    public function setTotalMailSize($total_mail_size): void
    {
        $this->total_mail_size = $total_mail_size;
    }

    /**
     * @return mixed
     */
    public function getTotalWebSize()
    {
        return $this->total_web_size;
    }

    /**
     * @param mixed $total_web_size
     */
    public function setTotalWebSize($total_web_size): void
    {
        $this->total_web_size = $total_web_size;
    }

    /**
     * @return mixed
     */
    public function getDefaultFileboxSize()
    {
        return $this->default_filebox_size;
    }

    /**
     * @param mixed $default_filebox_size
     */
    public function setDefaultFileboxSize($default_filebox_size): void
    {
        $this->default_filebox_size = $default_filebox_size;
    }

    /**
     * @return mixed
     */
    public function getAddFileboxSize()
    {
        return $this->add_filebox_size;
    }

    /**
     * @param mixed $add_filebox_size
     */
    public function setAddFileboxSize($add_filebox_size): void
    {
        $this->add_filebox_size = $add_filebox_size;
    }

    /**
     * @return mixed
     */
    public function getSmsId()
    {
        return $this->sms_id;
    }

    /**
     * @param mixed $sms_id
     */
    public function setSmsId($sms_id): void
    {
        $this->sms_id = $sms_id;
    }

    /**
     * @return mixed
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param mixed $startdate
     */
    public function setStartdate($startdate): void
    {
        $this->startdate = $startdate;
    }

    /**
     * @return mixed
     */
    public function getUpdatedate()
    {
        return $this->updatedate;
    }

    /**
     * @param mixed $updatedate
     */
    public function setUpdatedate($updatedate): void
    {
        $this->updatedate = $updatedate;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getUsePop3()
    {
        return $this->use_pop3;
    }

    /**
     * @param mixed $use_pop3
     */
    public function setUsePop3($use_pop3): void
    {
        $this->use_pop3 = $use_pop3;
    }

    /**
     * @return mixed
     */
    public function getUseSmtp()
    {
        return $this->use_smtp;
    }

    /**
     * @param mixed $use_smtp
     */
    public function setUseSmtp($use_smtp): void
    {
        $this->use_smtp = $use_smtp;
    }

    /**
     * @return mixed
     */
    public function getDbIp()
    {
        return $this->db_ip;
    }

    /**
     * @param mixed $db_ip
     */
    public function setDbIp($db_ip): void
    {
        $this->db_ip = $db_ip;
    }

    /**
     * @return mixed
     */
    public function getDbPartitioning()
    {
        return $this->db_partitioning;
    }

    /**
     * @param mixed $db_partitioning
     */
    public function setDbPartitioning($db_partitioning): void
    {
        $this->db_partitioning = $db_partitioning;
    }

    /**
     * @return mixed
     */
    public function getMailPartitioning()
    {
        return $this->mail_partitioning;
    }

    /**
     * @param mixed $mail_partitioning
     */
    public function setMailPartitioning($mail_partitioning): void
    {
        $this->mail_partitioning = $mail_partitioning;
    }

    /**
     * @return mixed
     */
    public function getMailIp()
    {
        return $this->mail_ip;
    }

    /**
     * @param mixed $mail_ip
     */
    public function setMailIp($mail_ip): void
    {
        $this->mail_ip = $mail_ip;
    }

    /**
     * @return mixed
     */
    public function getWebIp()
    {
        return $this->web_ip;
    }

    /**
     * @param mixed $web_ip
     */
    public function setWebIp($web_ip): void
    {
        $this->web_ip = $web_ip;
    }

    /**
     * @return mixed
     */
    public function getMailUseFlag()
    {
        return $this->mail_use_flag;
    }

    /**
     * @param mixed $mail_use_flag
     */
    public function setMailUseFlag($mail_use_flag): void
    {
        $this->mail_use_flag = $mail_use_flag;
    }

    /**
     * @return mixed
     */
    public function getWebhardUseFlag()
    {
        return $this->webhard_use_flag;
    }

    /**
     * @param mixed $webhard_use_flag
     */
    public function setWebhardUseFlag($webhard_use_flag): void
    {
        $this->webhard_use_flag = $webhard_use_flag;
    }

    /**
     * @return mixed
     */
    public function getIframeFlag()
    {
        return $this->iframe_flag;
    }

    /**
     * @param mixed $iframe_flag
     */
    public function setIframeFlag($iframe_flag): void
    {
        $this->iframe_flag = $iframe_flag;
    }

    /**
     * @return mixed
     */
    public function getMaxUserCnt()
    {
        return $this->max_user_cnt;
    }

    /**
     * @param mixed $max_user_cnt
     */
    public function setMaxUserCnt($max_user_cnt): void
    {
        $this->max_user_cnt = $max_user_cnt;
    }

    /**
     * @return mixed
     */
    public function getOfficeUserCnt()
    {
        return $this->office_user_cnt;
    }

    /**
     * @param mixed $office_user_cnt
     */
    public function setOfficeUserCnt($office_user_cnt): void
    {
        $this->office_user_cnt = $office_user_cnt;
    }

    /**
     * @return mixed
     */
    public function getIsManaged()
    {
        return $this->is_managed;
    }

    /**
     * @param mixed $is_managed
     */
    public function setIsManaged($is_managed): void
    {
        $this->is_managed = $is_managed;
    }

    /**
     * @return mixed
     */
    public function getIsArchive()
    {
        return $this->is_archive;
    }

    /**
     * @param mixed $is_archive
     */
    public function setIsArchive($is_archive): void
    {
        $this->is_archive = $is_archive;
    }

    /**
     * @return mixed
     */
    public function getUseSubdomain()
    {
        return $this->use_subdomain;
    }

    /**
     * @param mixed $use_subdomain
     */
    public function setUseSubdomain($use_subdomain): void
    {
        $this->use_subdomain = $use_subdomain;
    }

    /**
     * @return mixed
     */
    public function getKidShareFlag()
    {
        return $this->kid_share_flag;
    }

    /**
     * @param mixed $kid_share_flag
     */
    public function setKidShareFlag($kid_share_flag): void
    {
        $this->kid_share_flag = $kid_share_flag;
    }

    /**
     * @return mixed
     */
    public function getStdPrice()
    {
        return $this->std_price;
    }

    /**
     * @param mixed $std_price
     */
    public function setStdPrice($std_price): void
    {
        $this->std_price = $std_price;
    }

    /**
     * @return mixed
     */
    public function getBoardMigrationFlag()
    {
        return $this->board_migration_flag;
    }

    /**
     * @param mixed $board_migration_flag
     */
    public function setBoardMigrationFlag($board_migration_flag): void
    {
        $this->board_migration_flag = $board_migration_flag;
    }

    /**
     * @return mixed
     */
    public function getInsideMailFlag()
    {
        return $this->inside_mail_flag;
    }

    /**
     * @param mixed $inside_mail_flag
     */
    public function setInsideMailFlag($inside_mail_flag): void
    {
        $this->inside_mail_flag = $inside_mail_flag;
    }


}
