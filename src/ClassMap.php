<?php

namespace LorenzoG3M\FarmaDatiSoapTables;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetEnabledDataSet' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetEnabledDataSet',
            'GetEnabledDataSetResponse' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetEnabledDataSetResponse',
            'GetSchemaDataSet' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetSchemaDataSet',
            'GetSchemaDataSetResponse' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetSchemaDataSetResponse',
            'GetDataSet' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSet',
            'GetDataSetResponse' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSetResponse',
            'GetDataSetChanges' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSetChanges',
            'GetDataSetChangesResponse' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSetChangesResponse',
            'GetEnabledDataSet_Output' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetEnabledDataSet_Output',
            'ArrayOfSetDati' => '\\LorenzoG3M\\FarmaDatiSoapTables\\ArrayType\\ArrayOfSetDati',
            'SetDati' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\SetDati',
            'GetSchemaDataSet_Output' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetSchemaDataSet_Output',
            'ArrayOfField' => '\\LorenzoG3M\\FarmaDatiSoapTables\\ArrayType\\ArrayOfField',
            'Field' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\Field',
            'GetDataSet_Output' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSet_Output',
            'GetDataSetChanges_Output' => '\\LorenzoG3M\\FarmaDatiSoapTables\\StructType\\GetDataSetChanges_Output',
        );
    }
}
