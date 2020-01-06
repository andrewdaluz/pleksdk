# pleksdk
SDK da integração com a API da plekhub

# autenticação
$autenticacao = new \Plekhub\Pleksdk\Authentication\Basic("usuario","secret");

# Estados Civis / Listar todos os Estados Civis

$getMartial = Plekhub\Pleksdk\Plekhub::getMaritalStatusMethod($autenticacao);

$teste = $getMartial->execute();

# Estados Civis / Listar todos os Estados Civis - resposta
array(7) {
  [0]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#14 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(1)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(8) "Solteiro"
  }
  [1]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#15 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(2)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(6) "Casado"
  }
  [2]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#16 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(3)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(8) "Amasiado"
  }
}

# Tipos de Pessoa/Listar todos os Tipos de Pessoa
$personType = Plekhub\Pleksdk\Plekhub::getPersonTypeMethod($autenticacao);

$teste = $personType->execute();

# Tipos de Pessoa/Listar todos os Tipos de Pessoa - resposta
array(2) {
  [0]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#9 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(1)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(7) "Física"
  }
  [1]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#10 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(2)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(9) "Jurídica"
  }
}

# Seguro Fiança com Identificador/Calcular Seguro Fiança com Identificador

$postInsuranceGuaranteeWithIdentifierMethod = Plekhub\Pleksdk\Plekhub::postInsuranceGuaranteeWithIdentifierMethod($autenticacao);
$postInsuranceGuaranteeWithIdentifierMethod->propety()
        ->setAddress("Rua falsa 123")
        ->setTypeId(1)
        ->setReasonRentId(1)
        ->setCep(74938120)
        ->setRentValue(600)
        ->setCondominumValue(0)
        ->setElectricalValue(0)
        ->setIptuValue(20)
        ->setWaterValue(0)
        ->setGasValue(0)
        ->setStreetTypeId(1)
        ->setNeighborhood("bairro")
        ->setCoverageInnerPainting(0)
        ->setCoverageOuterPainting(0)
        ->setCoveragePropertyDamage(0)
        ->setCoverageContractTerminationFine(0)
        ->setReadjustmentIndexId(1)
        ->setValidityDuration(30);
$postInsuranceGuaranteeWithIdentifierMethod->addRenter()
        ->setCpf(00000000000)
        ->setName("fulano de tal")
        ->setBirthday("1993-11-25")
        ->setEmanciped(0)
        ->setPhoneDdd(62)
        ->setPhoneNumber(33333333)
        ->setMaritalStatusId(1)
        ->setEmail("fulano@hotmail.com")
        ->setEmploymentBondId(1)
        ->setResidenceCep(74030100)
        ->setCellphoneDdd(62)
        ->setCellphoneNumber(99999999)
        ->setOtherIncomes(0)
        ->setPublicPerson(0)
        ->setCompanyPhoneDdd(62)
        ->setCompanyPhoneNumber(333333333)
        ->setCompanyName("plek")
        ->setResidentCountry("Brasil");
$teste = $postInsuranceGuaranteeWithIdentifierMethod->execute();

# Seguro Fiança com Identificador/Calcular Seguro Fiança com Identificador - resposta

array(1) {
  ["PortoSeguro"]=>
  object(Plekhub\Pleksdk\Entities\BudgetsEntity)#14 (5) {
    ["insuranceCompany":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=>
    string(11) "PortoSeguro"
    ["id":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=>
    int(1)
    ["coverage":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=>
    object(Plekhub\Pleksdk\Entities\CoverageEntity)#15 (6) {
      ["rent":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(600)
      ["condominium":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(0)
      ["eletric":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(0)
      ["iptu":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(0)
      ["water":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(0)
      ["gas":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=>
      int(0)
    }
    ["prize":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=>
    object(Plekhub\Pleksdk\Entities\PrizeEntity)#16 (5) {
      ["emergencyValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=>
      int(0)
      ["netValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=>
      int(0)
      ["policyCost":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=>
      int(0)
      ["iofValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=>
      int(0)
      ["total":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=>
      int(0)
    }
    ["installmentPlans":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=>
    array(1) {
      [0]=>
      object(Plekhub\Pleksdk\Entities\InstallmentPlansEntity)#17 (12) {
        ["id":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["paymentType":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        string(6) "BOLETO"
        ["description":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        string(6) "BOLETO"
        ["installmentQuantity":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(1)
        ["firstInstallmentValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["remainingInstallmentsValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["interestValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["chargeValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["policyValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["iofValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["interestTax":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
        ["totalValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=>
        int(0)
      }
    }
  }
}

# Contratar/Realizar Contratação

$postContractMethod = Plekhub\Pleksdk\Plekhub::postContractMethod($autenticacao);
$postContractMethod->setBudget(1);
$postContractMethod->setChoosenPlan(0);
$postContractMethod->setInsuranceCompany("PortoSeguro");

$postContractMethod->landLord()
        ->setAddress("rua falsa 123")
        ->setAddressComplement("")
        ->setAddressNumber(1)
        ->setBirthday("1993-11-25")
        ->setCep(74000000)
        ->setCity("Goiania")
        ->setCpf("00000000000")
        ->setEmail("cleomar@plek.com.br")
        ->setName("fulano de tal")
        ->setNeighborhood("bairro")
        ->setPersonTypeId(1)
        ->setPhone(62333633333)
        ->setProfession(1)
        ->setPublicPerson(0)
        ->setResidentCountry("Brasil")
        ->setStreetTypeId(1);
$teste = $postContractMethod->execute();

# Contratar/Realizar Contratação - resposta
bool(true)


# exceções

Plekhub\Pleksdk\Exceptions\ValidationException -> falha da validação da entidade enviada
Plekhub\Pleksdk\Exceptions\AuthenticationException -> falha na autenticação
Plekhub\Pleksdk\Exceptions\RequisitionException -> falha no servidor

