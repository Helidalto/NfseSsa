<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?><ns3:CancelarNfseEnvio xmlns:ns3="http://www.ginfes.com.br/servico_cancelar_nfse_envio_v03.xsd" xmlns:ns4="http://www.ginfes.com.br/tipos_v03.xsd"><Pedido><ns4:InfPedidoCancelamento><ns4:IdentificacaoNfse>{!! array_xml_get($dados['identificacao_nfse'], 'numero') !!}{!! array_xml_get($dados['identificacao_nfse'], 'cnpj') !!}{!! array_xml_get($dados['identificacao_nfse'], 'inscricao_municipal') !!}{!! array_xml_get($dados['identificacao_nfse'], 'codigo_municipio') !!}</ns4:IdentificacaoNfse>{!! array_xml_get($dados, 'codigo_cancelamento') !!}</ns4:InfPedidoCancelamento></Pedido></ns3:CancelarNfseEnvio>