from brazilfiscalreport.danfe import (
    Danfe,
    DanfeConfig
)

import sys

args = sys.argv[1:]

input_file = args[0]
output_file = args[1]
logo_path = args[2]

# Path to the XML file
xml_file_path = input_file

# Load XML Content
with open(xml_file_path, "r", encoding="utf8") as file:
    xml_content = file.read()

# Create a configuration instance
config = DanfeConfig(
    logo=logo_path
)

# Instantiate the DANFE object with the loaded XML content
danfe = Danfe(xml=xml_content, config=config)

# Save the generated PDF to a file
danfe.output(output_file)