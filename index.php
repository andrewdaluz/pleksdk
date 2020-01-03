<?php
require "vendor/autoload.php";

$autenticacao = new \Plekhub\Pleksdk\Authentication\Basic("plek","1FyX7uUjs3E8NzY0HwHcl_Vz8_Iqyv80");
//Plekhub\Pleksdk\Plekhub::setHomologationEnv();
$getMartial = Plekhub\Pleksdk\Plekhub::postInsuranceGuaranteeWithIdentifierMethod($autenticacao);
$getMartial->propety()
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
        ->setNeighborhood("vila mariana")
        ->setCoverageInnerPainting(0)
        ->setCoverageOuterPainting(0)
        ->setCoveragePropertyDamage(0)
        ->setCoverageContractTerminationFine(0)
        ->setReadjustmentIndexId(1)
        ->setValidityDuration(30);
$getMartial->addRenter()
        ->setCpf(70029957150)
        ->setName("Cleomar Rodrigues de Araujo Junior")
        ->setBirthday("1993-11-25")
        ->setEmanciped(0)
        ->setPhoneDdd(62)
        ->setPhoneNumber(33333333)
        ->setMaritalStatusId(7)
        ->setEmail("cleojr11@hotmail.com")
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
$teste = $getMartial->execute();
echo "<pre>";
var_dump($teste);