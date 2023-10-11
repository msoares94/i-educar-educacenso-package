<?php

namespace iEducar\Packages\Educacenso\Services\Version2023\Models;

use App\Models\Educacenso\Registro10;

class Registro10Model extends Registro10
{
    public function hydrateModel($arrayColumns): void
    {
        array_unshift($arrayColumns, null);
        unset($arrayColumns[0]);

        $this->registro = $arrayColumns[1];
        $this->codigoInep = $arrayColumns[2];
        $this->localFuncionamentoPredioEscolar = $arrayColumns[3];
        $this->localFuncionamentoSalasOutraEscola = $arrayColumns[4];
        $this->localFuncionamentoGalpao = $arrayColumns[5];
        $this->localFuncionamentoUnidadeAtendimentoSocioeducativa = $arrayColumns[6];
        $this->localFuncionamentoUnidadePrisional = $arrayColumns[7];
        $this->localFuncionamentoOutros = $arrayColumns[8];
        $this->condicao = $arrayColumns[9];
        $this->predioCompartilhadoOutraEscola = (int) $arrayColumns[10];
        $this->codigoInepEscolaCompartilhada = $arrayColumns[11];
        $this->codigoInepEscolaCompartilhada2 = $arrayColumns[12];
        $this->codigoInepEscolaCompartilhada3 = $arrayColumns[13];
        $this->codigoInepEscolaCompartilhada4 = $arrayColumns[14];
        $this->codigoInepEscolaCompartilhada5 = $arrayColumns[15];
        $this->codigoInepEscolaCompartilhada6 = $arrayColumns[16];
        $this->aguaPotavelConsumo = $arrayColumns[17];
        $this->aguaRedePublica = $arrayColumns[18];
        $this->aguaPocoArtesiano = $arrayColumns[19];
        $this->aguaCacimbaCisternaPoco = $arrayColumns[20];
        $this->aguaFonteRio = $arrayColumns[21];
        $this->aguaInexistente = $arrayColumns[22];
        $this->energiaRedePublica = $arrayColumns[23];
        $this->energiaGerador = $arrayColumns[24];
        $this->energiaOutros = $arrayColumns[25];
        $this->energiaInexistente = $arrayColumns[26];
        $this->esgotoRedePublica = $arrayColumns[27];
        $this->esgotoFossaComum = $arrayColumns[28];
        $this->esgotoFossaRudimentar = $arrayColumns[29];
        $this->esgotoInexistente = $arrayColumns[30];
        $this->lixoColetaPeriodica = $arrayColumns[31];
        $this->lixoQueima = $arrayColumns[32];
        $this->lixoEnterra = $arrayColumns[33];
        $this->lixoDestinacaoPoderPublico = $arrayColumns[34];
        $this->lixoJogaOutraArea = $arrayColumns[35];
        $this->tratamentoLixoSeparacao = $arrayColumns[36];
        $this->tratamentoLixoReaproveitamento = $arrayColumns[37];
        $this->tratamentoLixoReciclagem = $arrayColumns[38];
        $this->tratamentoLixoNaoFaz = $arrayColumns[39];
        $this->dependenciaAumoxarifado = $arrayColumns[40];
        $this->dependenciaAreaVerde = $arrayColumns[41];
        $this->dependenciaAuditorio = $arrayColumns[42];
        $this->dependenciaBanheiro = $arrayColumns[43];
        $this->dependenciaBanheiroDeficiente = $arrayColumns[44];
        $this->dependenciaBanheiroInfantil = $arrayColumns[45];
        $this->dependenciaBanheiroFuncionarios = $arrayColumns[46];
        $this->dependenciaBanheiroChuveiro = $arrayColumns[47];
        $this->dependenciaBiblioteca = $arrayColumns[48];
        $this->dependenciaCozinha = $arrayColumns[49];
        $this->dependenciaDispensa = $arrayColumns[50];
        $this->dependenciaDormitorioAluno = $arrayColumns[51];
        $this->dependenciaDormitorioProfessor = $arrayColumns[52];
        $this->dependenciaLaboratorioCiencias = $arrayColumns[53];
        $this->dependenciaLaboratorioInformatica = $arrayColumns[54];
        $this->dependenciaLaboratorioEducacaoProfissional = $arrayColumns[55];
        $this->dependenciaParqueInfantil = $arrayColumns[56];
        $this->dependenciaPatioCoberto = $arrayColumns[57];
        $this->dependenciaPatioDescoberto = $arrayColumns[58];
        $this->dependenciaPiscina = $arrayColumns[59];
        $this->dependenciaQuadraCoberta = $arrayColumns[60];
        $this->dependenciaQuadraDescoberta = $arrayColumns[61];
        $this->dependenciaRefeitorio = $arrayColumns[62];
        $this->dependenciaSalaRepouso = $arrayColumns[63];
        $this->dependenciaSalaArtes = $arrayColumns[64];
        $this->dependenciaSalaMusica = $arrayColumns[65];
        $this->dependenciaSalaDanca = $arrayColumns[66];
        $this->dependenciaSalaMultiuso = $arrayColumns[67];
        $this->dependenciaTerreirao = $arrayColumns[68];
        $this->dependenciaViveiro = $arrayColumns[69];
        $this->dependenciaSalaDiretoria = $arrayColumns[70];
        $this->dependenciaSalaLeitura = $arrayColumns[71];
        $this->dependenciaSalaProfessores = $arrayColumns[72];
        $this->dependenciaSalaAee = $arrayColumns[73];
        $this->dependenciaSalaSecretaria = $arrayColumns[74];
        $this->dependenciaSalaEducacaoProfissional = $arrayColumns[75];
        $this->dependenciaSalaEstudioGravacaoEdicao = $arrayColumns[76];
        $this->dependenciaNenhumaRelacionada = $arrayColumns[77];
        $this->recursoCorrimao = $arrayColumns[78];
        $this->recursoElevador = $arrayColumns[79];
        $this->recursoPisosTateis = $arrayColumns[80];
        $this->recursoPortaVaoLivre = $arrayColumns[81];
        $this->recursoRampas = $arrayColumns[82];
        $this->recursoSinalizacaoSonora = $arrayColumns[83];
        $this->recursoSinalizacaoTatil = $arrayColumns[84];
        $this->recursoSinalizacaoVisual = $arrayColumns[85];
        $this->recursoNenhum = $arrayColumns[85];
        $this->numeroSalasUtilizadasDentroPredio = $arrayColumns[87];
        $this->numeroSalasUtilizadasForaPredio = $arrayColumns[88];
        $this->numeroSalasClimatizadas = $arrayColumns[89];
        $this->numeroSalasAcessibilidade = $arrayColumns[90];
        $this->antenasParabolicas = $arrayColumns[91];
        $this->computadores = $arrayColumns[92];
        $this->copiadoras = $arrayColumns[93];
        $this->impressoras = $arrayColumns[94];
        $this->impressorasMultifuncionais = $arrayColumns[85];
        $this->equipamentosScanner = $arrayColumns[96];
        $this->equipamentosNenhum = $arrayColumns[97];
        $this->dvds = $arrayColumns[98];
        $this->aparelhosDeSom = $arrayColumns[99];
        $this->televisoes = $arrayColumns[100];
        $this->lousasDigitais = $arrayColumns[101];
        $this->projetoresDigitais = $arrayColumns[102];
        $this->quantidadeComputadoresAlunosMesa = $arrayColumns[103];
        $this->quantidadeComputadoresAlunosPortateis = $arrayColumns[104];
        $this->quantidadeComputadoresAlunosTablets = $arrayColumns[105];
        $this->acessoInternetAdministrativo = $arrayColumns[106];
        $this->acessoInternetProcessoEnsino = $arrayColumns[107];
        $this->acessoInternetAlunos = $arrayColumns[108];
        $this->acessoInternetComunidade = $arrayColumns[109];
        $this->acessoInternetNaoPossui = $arrayColumns[110];
        $this->computadoresMesaAcessoInternet = $arrayColumns[111];
        $this->dispositovosPessoaisAcessoInternet = $arrayColumns[112];
        $this->acessoInternet = $arrayColumns[113] ?: null;
        $this->redeLocalCabo = $arrayColumns[114];
        $this->redeLocalWireless = $arrayColumns[115];
        $this->redeLocalNaoExiste = $arrayColumns[116];
        $this->qtdAuxiliarAdministrativo = $arrayColumns[117];
        $this->qtdAuxiliarServicosGerais = $arrayColumns[118];
        $this->qtdBibliotecarios = $arrayColumns[119];
        $this->qtdBombeiro = $arrayColumns[120];
        $this->qtdCoordenadorTurno = $arrayColumns[121];
        $this->qtdFonoaudiologo = $arrayColumns[122];
        $this->qtdNutricionistas = $arrayColumns[123];
        $this->qtdPsicologo = $arrayColumns[124];
        $this->qtdProfissionaisPreparacao = $arrayColumns[125];
        $this->qtdApoioPedagogico = $arrayColumns[126];
        $this->qtdSecretarioEscolar = $arrayColumns[127];
        $this->qtdSegurancas = $arrayColumns[128];
        $this->qtdTecnicos = $arrayColumns[129];
        $this->qtdViceDiretor = $arrayColumns[130];
        $this->qtdOrientadorComunitario = $arrayColumns[131];
        $this->qtdTradutorInterpreteLibrasOutroAmbiente = $arrayColumns[132];
        $this->semFuncionariosParaFuncoes = $arrayColumns[133];
        $this->alimentacaoEscolarAlunos = $arrayColumns[134];
        $this->instrumentosPedagogicosAcervo = $arrayColumns[135];
        $this->instrumentosPedagogicosBrinquedos = $arrayColumns[136];
        $this->instrumentosPedagogicosMateriaisCientificos = $arrayColumns[137];
        $this->instrumentosPedagogicosEquipamentosSom = $arrayColumns[138];
        $this->instrumentosPedagogicosInstrumentos = $arrayColumns[139];
        $this->instrumentosPedagogicosJogos = $arrayColumns[140];
        $this->instrumentosPedagogicosAtividadesCulturais = $arrayColumns[141];
        $this->instrumentosPedagogicosEducacaoProfissional = $arrayColumns[142];
        $this->instrumentosPedagogicosPraticaDesportiva = $arrayColumns[143];
        $this->instrumentosPedagogicosEducacaoBilingueSurdos = $arrayColumns[144];
        $this->instrumentosPedagogicosEducacaoIndigena = $arrayColumns[145];
        $this->instrumentosPedagogicosEducacaoEtnicoRacial = $arrayColumns[146];
        $this->instrumentosPedagogicosEducacaoCampo = $arrayColumns[147];
        $this->instrumentosPedagogicosNenhum = $arrayColumns[148];
        $this->educacaoIndigena = (int) $arrayColumns[149];
        $this->linguaIndigena = $arrayColumns[150];
        $this->linguaPortuguesa = $arrayColumns[151];
        $this->linguaIndigena1 = $arrayColumns[152];
        $this->linguaIndigena2 = $arrayColumns[153];
        $this->linguaIndigena3 = $arrayColumns[154];
        $this->exameSelecaoIngresso = (int) $arrayColumns[155];
        $this->reservaVagasCotasAutodeclaracao = $arrayColumns[156];
        $this->reservaVagasCotasRenda = $arrayColumns[157];
        $this->reservaVagasCotasEscolaPublica = $arrayColumns[158];
        $this->reservaVagasCotasPCD = $arrayColumns[159];
        $this->reservaVagasCotasOutros = $arrayColumns[160];
        $this->reservaVagasCotasNaoFaz = $arrayColumns[161];
        $this->url = $arrayColumns[162];
        $this->compartilhaEspacosAtividadesIntegracao = (int) $arrayColumns[163];
        $this->usaEspacosEquipamentosAtividadesRegulares = (int) $arrayColumns[164];
        $this->orgaoColegiadoAssociacaoPais = $arrayColumns[165];
        $this->orgaoColegiadoAssociacaoPaisMestres = $arrayColumns[166];
        $this->orgaoColegiadoConselho = $arrayColumns[167];
        $this->orgaoColegiadoGremio = $arrayColumns[168];
        $this->orgaoColegiadoOutros = $arrayColumns[169];
        $this->orgaoColegiadoNaoExiste = $arrayColumns[170];
        $this->projetoPoliticoPedagogico = $arrayColumns[171];
    }
}
