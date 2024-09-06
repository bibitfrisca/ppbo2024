class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function setPhone($phone): void
    {
        $this->phone = (string)$phone;
    }

    public function getPhone(): int
    {
        return (int)$this->phone;
    }
}