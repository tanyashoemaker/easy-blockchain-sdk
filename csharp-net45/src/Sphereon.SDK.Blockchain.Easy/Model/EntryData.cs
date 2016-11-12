/* 
 * Easy Blockchain API
 *
 * <b>The Easy Blockchain API is an easy to use API to store entries within chains. Currently it stores entries using the bitcoin blockchain by means of Factom. In the future other solutions will be made available</b>    The flow is generally as follows:  1. Make sure a chain has been created using the /chain POST endpoint. Normally you only need one or a handful of chains. This is an expensive operation.  2. Store entries on the chain from step 1. The entries will contain the content and metadata you want to store forever on the specified chain.  3. Retrieve an existing entry from the chain to verify or retrieve data      <b>Interactive testing: </b>A web based test console is available in the <a href=\"https://store.sphereon.com\">Sphereon API Store</a>
 *
 * OpenAPI spec version: 0.1.0
 * Contact: dev@sphereon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;

namespace Sphereon.SDK.Blockchain.Easy.Model
{
    /// <summary>
    /// Entry Data
    /// </summary>
    [DataContract]
    public partial class EntryData :  IEquatable<EntryData>
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="EntryData" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected EntryData() { }
        /// <summary>
        /// Initializes a new instance of the <see cref="EntryData" /> class.
        /// </summary>
        /// <param name="ExternalIds">External IDs.</param>
        /// <param name="Content">Content (required).</param>
        public EntryData(List<ExternalId> ExternalIds = null, byte[] Content = null)
        {
            // to ensure "Content" is required (not null)
            if (Content == null)
            {
                throw new InvalidDataException("Content is a required property for EntryData and cannot be null");
            }
            else
            {
                this.Content = Content;
            }
            this.ExternalIds = ExternalIds;
        }
        
        /// <summary>
        /// External IDs
        /// </summary>
        /// <value>External IDs</value>
        [DataMember(Name="externalIds", EmitDefaultValue=false)]
        public List<ExternalId> ExternalIds { get; set; }
        /// <summary>
        /// Content
        /// </summary>
        /// <value>Content</value>
        [DataMember(Name="content", EmitDefaultValue=false)]
        public byte[] Content { get; set; }
        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class EntryData {\n");
            sb.Append("  ExternalIds: ").Append(ExternalIds).Append("\n");
            sb.Append("  Content: ").Append(Content).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="obj">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object obj)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            return this.Equals(obj as EntryData);
        }

        /// <summary>
        /// Returns true if EntryData instances are equal
        /// </summary>
        /// <param name="other">Instance of EntryData to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(EntryData other)
        {
            // credit: http://stackoverflow.com/a/10454552/677735
            if (other == null)
                return false;

            return 
                (
                    this.ExternalIds == other.ExternalIds ||
                    this.ExternalIds != null &&
                    this.ExternalIds.SequenceEqual(other.ExternalIds)
                ) && 
                (
                    this.Content == other.Content ||
                    this.Content != null &&
                    this.Content.Equals(other.Content)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            // credit: http://stackoverflow.com/a/263416/677735
            unchecked // Overflow is fine, just wrap
            {
                int hash = 41;
                // Suitable nullity checks etc, of course :)
                if (this.ExternalIds != null)
                    hash = hash * 59 + this.ExternalIds.GetHashCode();
                if (this.Content != null)
                    hash = hash * 59 + this.Content.GetHashCode();
                return hash;
            }
        }
    }

}
