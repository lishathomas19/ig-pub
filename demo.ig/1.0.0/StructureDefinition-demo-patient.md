# Demo Patient Profile - Lisha Demo Implementation Guide v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Demo Patient Profile**

## Resource Profile: Demo Patient Profile 

| | |
| :--- | :--- |
| *Official URL*:https://lishathomas19.github.io/ig-pub/demo.ig/StructureDefinition/demo-patient | *Version*:1.0.0 |
| Active as of 2025-12-24 | *Computable Name*:DemoPatient |

 
Simple Patient profile for learning FHIR Shorthand. 

**Usages:**

* Examples for this Profile: [Patient/DemoPatientExample](Patient-DemoPatientExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/demo.ig|current/StructureDefinition/demo-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-demo-patient.csv), [Excel](StructureDefinition-demo-patient.xlsx), [Schematron](StructureDefinition-demo-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "demo-patient",
  "url" : "https://lishathomas19.github.io/ig-pub/demo.ig/StructureDefinition/demo-patient",
  "version" : "1.0.0",
  "name" : "DemoPatient",
  "title" : "Demo Patient Profile",
  "status" : "active",
  "date" : "2025-12-24T03:02:10+01:00",
  "publisher" : "Lisha Thomas",
  "contact" : [
    {
      "name" : "Lisha Thomas",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://github.com/lishathomas19/fhir-ig-lisha-demo"
        }
      ]
    },
    {
      "name" : "Lisha Thomas",
      "telecom" : [
        {
          "system" : "email",
          "value" : "lishatej7@gmail.com"
        }
      ]
    }
  ],
  "description" : "Simple Patient profile for learning FHIR Shorthand.",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "min" : 1
      },
      {
        "id" : "Patient.identifier.system",
        "path" : "Patient.identifier.system",
        "min" : 1,
        "patternUri" : "http://example.org/fhir/ids/patient"
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "min" : 1
      },
      {
        "id" : "Patient.name.family",
        "path" : "Patient.name.family",
        "min" : 1
      },
      {
        "id" : "Patient.name.given",
        "path" : "Patient.name.given",
        "min" : 1
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "min" : 1
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "min" : 1
      }
    ]
  }
}

```
