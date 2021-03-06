<?php

namespace Helidalto\NfseSsa;

use Helidalto\NfseSsa\Services\RequestService;
use Helidalto\NfseSsa\Services\SignatureService;

class NfseSsa
{
    private $signatureService;

    private $requestService;

    public function __construct(SignatureService $signatureService, RequestService $requestService)
    {
        $this->signatureService = $signatureService;

        $this->requestService = $requestService;
    }

    /**
     * @param $dados
     *
     * @return
     *
     * @throws \Throwable
     */
    public function enviarLoteRps($dados)
    {
        $xml = xml_view('EnviarLoteRPS', $dados);        
        $signedXml = $this->signatureService->signXml($xml, true, ['EnviarLoteRpsEnvio']);
        $result = $this->requestService->enviarLoteRps($signedXml);
        return $result;
    }

    /**
     * @param $dados
     *
     * @return
     *
     * @throws \Throwable
     */
    public function consultarSituacaoLoteRps($dados)
    {
        $xml = xml_view('ConsultarSituacaoLoteRPS', $dados);
        //$result = $this->requestService->consultarSituacaoLoteRps($xml);
        $signedXml = $this->signatureService->signXml($xml, true, ['ConsultarSituacaoLoteRpsEnvio']);
        $result = $this->requestService->consultarSituacaoLoteRps($signedXml);                
        return $result;
    }

    /**
     * @param $dados
     *
     * @return
     *
     * @throws \Throwable
     */
    public function consultarLoteRps($dados)
    {
        $xml = xml_view('ConsultarLoteRPS', $dados);
        //$result = $this->requestService->consultarLoteRps($xml);
        $signedXml = $this->signatureService->signXml($xml, true, ['ConsultarLoteRpsEnvio']);
        $result = $this->requestService->consultarLoteRps($signedXml);                
        return $result;
    }

    /**
     * @param $dados
     *
     * @return
     *
     * @throws \Throwable
     */
    public function consultarNfseRps($dados)
    {
        $xml = xml_view('ConsultarNfseRPS', $dados);
        $signedXml = $this->signatureService->signXml($xml, true, ['ConsultarNfseRpsEnvio']);
        $result = $this->requestService->consultarNfseRps($signedXml);
        return $result;
    }
    
    /**
     * @param $dados
     *
     * @return
     *
     * @throws \Throwable
     */
    public function cancelarNFSe($dados)
    {
        $xml = xml_view('CancelarNfseEnvio', $dados);        
        $signedXml = $this->signatureService->signXml($xml, true, ['CancelarNfseEnvio']);
        $result = $this->requestService->cancelarNFSe($signedXml);                
        return $result;
    }    



    /**
     * @param $dados
     * @return mixed
     * @throws \Throwable
     */
    public function consultarNfse($dados)
    {
        $xml = xml_view('ConsultarNfse', $dados);

        $result = $this->requestService->consultarNfse($xml);

        return $result;
    }

}