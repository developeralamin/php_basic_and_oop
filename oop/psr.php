<?php
//  Php Standard recommendation = PSR-1,PSR2
class InvoiceRepository
{
    public $user_id = 1;
    protected $user_name = "alamin";
    private $user_account_number = 455;

    public function setAccount()
    {
        return $this->user_account_number;
    }
    public function getAccount($ac_number)
    {
        return $this->user_account_number = $ac_number;
    }

    public function samapleMesage()
    {
        echo "Hey this samapleMesage method ";
    }
}

class ReportRepository extends InvoiceRepository
{
    // public $user_name;
    public function samapleMesage()
    {
        parent::samapleMesage();
        echo "</br>";
        echo "child method";
        echo "</br>";
        echo $this->user_name = "alamin";
    }
}



// $Object = new InvoiceRepository;
// echo $Object->user_id;
// $Object->setAccount();
// echo $Object->getAccount(12445);

// echo $Object->user_name;
// echo $Object->user_account_number;

$reports = new ReportRepository();
$reports->samapleMesage();
// echo $reports->user_name = "alamin";
